<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Author;
use App\Models\User;
use App\Models\Academy;
use App\Models\Order;
use App\Models\OrderItem;

class DashboardController extends Controller
{

    public function index()
    {
      $bookCount = Book::count();
      $authorCount = Author::count();
      $userCount = User::count();
      $academyCount = Academy::count();
      $orders = Order::paginate(10);
      $status = ['En Progreso', 'Enviado', 'Cancelado'];
      return view('admin.dashboard', [ 'book' => $bookCount, 'author' => $authorCount, 'user' => $userCount, 'academy' => $academyCount, 'orders' => $orders, 'status' => $status]);
    }

    public function detailsOrder($id)
    {
      $order = Order::findorfail($id);
       $status = ['En Progreso', 'Enviado', 'Cancelado'];
      $user = User::findorfail($order->user_id);
      return view('admin.order-details', ['order' => $order, 'user' => $user, 'status' => $status]);
    }

    public function status(Request $request)
    {
      $order = Order::findorfail($request->id);
      if (count($order) == 1) {
        $save = $order->update([
          'status' => $request->data,
          ]);
        if ($save) {

          return response()->json([], 200);
        }else{
          return response()->json([], 403);
        }
      }
    }


}