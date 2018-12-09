<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;


use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function all_orders()
    {
        return \App\Order::all();
    }

    public function show_order(Order $order)
    {
        return $order;
    }

    public function store_order(Request $request)
    {
        $order = Order::create($request->all());
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
}
