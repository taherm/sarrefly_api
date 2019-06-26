<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use App\Rate;


use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function all_orders()
    {
        return \App\Order::where('status', '!=', 'failed')->get();
    }

    public function show_order(Order $order)
    {
        return $order;
    }

    public function show_user_order($id)
    {
        $order = \App\Order::where('user_id', $id)->where('status', 'success')->get();

        return $order;
    }

    public function store_order(Request $request)
    {
        $order = Order::create($request->all())->id;
        return response()->json($order, 201);
    }

    public function update_order(Request $request, Slider $Service)
    {
        $Service->update($request->all());

        return response()->json($Service, 200);
    }

    public function delete_order(Slider $Service)
    {
        $Service->delete();

        return response()->json(null, 204);
    }



    public function login(Request $request)
    {
        $val = User::where('name', $request->name)->where('password', $request->password)->first();
        //return (string)(!empty($val));
        return $val;
    }



    public function all_users()
    {
        return \App\User::all();
    }

    public function show_user(User $user)
    {
        return $user;
    }

    public function store_user(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    public function update_user(Request $request, User $user)
    {
        $user->update($request->all());

        return response()->json($user, 200);
    }

    public function delete_user(User $user)
    {
        $user->delete();

        return response()->json(null, 204);
    }

    public function verify_token(Request $request)
    {
        $val = User::where('api_token', $request->api_token)->first();
        if (!$val) {
            return response()->json(0, 404);
        }
        return $val;
    }

    public function get_rate(Request $request)
    {
        $rate = Rate::where('country', $request->country)->first();
        $val = $rate->rate;
        return $val;
    }


    public function saved_orders($id)
    {
        $saved = User::find($id)->orders->where('saved', 1)->flatten();
        return $saved;
    }

    public function success_orders()
    {
        $success_order = Order::where('status', 'success')->get()->flatten();
        //dd($success_order);
        return $success_order;
    }

    public function all_rates()
    {
        $rate = Rate::all();

        return $rate;
    }

    public function make_payment(Request $request)
    {
        $order = Order::where('id', $request->order_id)->first();
        $amount = $request->amount + $request->charges;
        $user_details = Order::find($order->id)->user;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.tap.company/v2/charges",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\"amount\":$amount,\"currency\":\"KWD\",\"threeDSecure\":true,\"save_card\":false,\"description\":\"$order->amount KD for $order->order_type By $user_details->name\",\"statement_descriptor\":\"Sample\",\"metadata\":{\"udf1\":\"test 1\",\"udf2\":\"test 2\"},\"reference\":{\"transaction\":\"$order->charge_id\",\"order\":\"$order->id\"},\"receipt\":{\"email\":false,\"sms\":true},\"customer\":{\"first_name\":\"$order->receiver_name\",\"middle_name\":\"test\",\"last_name\":\"test\",\"email\":\"$user_details->email\",\"phone\":{\"country_code\":\"965\",\"number\":\"50000000\"}},\"source\":{\"id\":\"src_kw.knet\"},\"post\":{\"url\":\"http://your_website.com/post_url\"},\"redirect\":{\"url\":\"http://172.20.10.3:80:80/sarrefly_api/public/knet\"}}",
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer sk_test_XKokBfNWv6FIYuTMg5sLPjhJ",
                "content-type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $response = (\GuzzleHttp\json_decode($response));
            $order->charge_id = $response->id;
            $order->save();
            return response()->json($response);
        }
    }
}
