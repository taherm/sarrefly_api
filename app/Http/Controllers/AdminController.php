<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class AdminController extends Controller
{
    public function add_user(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = new \App\User;
        $user->name = request()->name;
        $user->address = request()->address;
        $user->civil_id = request()->civil_id;
        $user->mobile = request()->mobile;
        $user->country = request()->country;

        $user->password = request()->password;
        $user->email = request()->email;
        $user->save();
        session()->flash('message', 'User Added!');
        return redirect('/users');
    }

    public function add_rate(Request $request)
    {
        $this->validate(request(), [
            'country' => 'required',
            'rate' => 'required',
        ]);
        $rate = new \App\Rate;
        $rate->country = request()->country;
        $rate->rate = request()->rate;
        $rate->save();
        session()->flash('message', 'Rate Added!');
        return redirect('/rates');
    }


    public function destroy($id)
    {
        $order = \App\Order::find($id);
        $order->delete();
        session()->flash('message', 'Order Deleted!');

        return redirect('/');
    }

    public function delete_user($id)
    {
        $user = \App\User::find($id);
        $user->delete();
        session()->flash('message', 'User Deleted!');

        return redirect('/users');
    }


    public function delete_rate($id)
    {
        $rate = \App\Rate::find($id);
        $rate->delete();
        session()->flash('message', 'Rate Deleted!');

        return redirect('/rates');
    }


    public function update($id)
    {
        $order = \App\Order::find($id);
        $order->receiver_name = request('name');
        $order->receiver_mobile = request('mobile');
        $order->civil_id = request('civil_id');
        $order->receiver_address = request('address');
        $order->country = request('country');
        $order->amount = request('amount');
        $order->order_type = request('order_type');
        $order->status = request('status');
        $order->save();
        session()->flash('message', 'Order Updated!');

        return redirect('/');
    }


    public function update_user($id)
    {
        $user = \App\User::find($id);
        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');
        $user->address = request()->address;
        $user->civil_id = request()->civil_id;
        $user->mobile = request()->mobile;
        $user->country = request()->country;
        $user->save();
        session()->flash('message', 'User Details Updated!');

        return redirect('/users');
    }


    public function update_rate($id)
    {
        $rate = \App\Rate::find($id);
        $rate->rate = request()->rate;
        $rate->country = request()->country;
        $rate->save();
        session()->flash('message', 'Rate Updated!');

        return redirect('/rates');
    }


    public function order_completed($id)
    {
        $order = \App\Order::find($id);
        $order->status = "completed";
        $order->save();
        session()->flash('message', 'Order Status Updated!');

        return redirect('/');
    }

    public function code($id)
    {

        $order = \App\Order::find($id);
        $order->code = request('code');
        $order->save();
        session()->flash('message', 'Code Updated!');

        return redirect('/');
    }

    public function knet(Request $request)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.tap.company/v2/charges/" . $request->tap_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "{}",
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer sk_test_XKokBfNWv6FIYuTMg5sLPjhJ"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $data = json_decode($response);
        if ($err) {
            $order = \App\Order::where('charge_id', $request->tap_id)->first();
            $order->status = "failed";
            $order->save();
            return view('no_thanks');
        } else {
            if ($data->status == "CAPTURED") {
                $order = \App\Order::where('charge_id', $request->tap_id)->first();
                $order->status = "success";
                $order->save();
                return view('thanks');
            } else {
                $order = \App\Order::where('charge_id', $request->tap_id)->first();
                $order->status = "failed";
                $order->save();
                return view('no_thanks');
            }
        }
    }
}
