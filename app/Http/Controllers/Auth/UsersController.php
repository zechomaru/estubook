<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Order;

class UsersController extends Controller
{

    public function profile()
    {
       $user = User::findorfail(\Auth::user()->id);
       $orders = Order::where('user_id', $user->id)->get();
       return view('auth.profile', ['user' => $user, 'orders' => $orders]); 
    }

    public function profileEdit()
    {
        # code...
    }

    public function orderDetails($id)
    {
        $user = User::findorfail(\Auth::user()->id);
        $order = Order::where('id', '=' , $id)->where('user_id', $user->id)->first();
        return view('auth.order-details', ['order' => $order]);
    }

}