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

    public function order_completed($id)
    {
        $order = \App\Order::find($id);
        $order->status = "completed";
        $order->save();
        session()->flash('message', 'Order Status Updated!');

        return redirect('/');
    }
}
