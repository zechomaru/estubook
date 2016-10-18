<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Book;

class CartController extends Controller
{
  public function __construct()
  {
    if(!\Session::has('cart')) \Session::put('cart', array());
  }

    // Show cart
    public function show()
    {
      $cart = \Session::get('cart');
      $total = $this->total();
      return view('store.cart', compact('cart', 'total'));
    }

    // Add item
    public function add(Request $request)
    {
      $isbn= $request->data;
      for ($i=0; $i < count($isbn) ; $i++) { 
        $book = Book::where('isbn', '=',  $isbn[$i])->first();
        $cart = \Session::get('cart');
        $book->quantity = 1;
        $cart[$book->isbn] = $book;
        \Session::put('cart', $cart);
      }

      return $cart;
    }

    // Delete item
    public function delete(Product $product)
    {
      $cart = \Session::get('cart');
      unset($cart[$product->slug]);
      \Session::put('cart', $cart);

      return redirect()->route('cart-show');
    }

    // Update item
    public function update($isbn, $quantity)
    {
      $cart = \Session::get('cart');
      $cart[$isbn]->quantity = $quantity;
      \Session::put('cart', $cart);

      return redirect()->route('cart-show');
    }

    // Trash cart
    public function trash()
    {
      \Session::forget('cart');

      return redirect()->route('cart-show');
    }

    // Total
    private function total()
    {
      $cart = \Session::get('cart');
      $total = 0;
      foreach($cart as $item){
        $total += $item->price * $item->quantity;
      }

      return $total;
    }

    // Detalle del pedido
    public function orderDetail()
    {
        if(count(\Session::get('cart')) <= 0) return redirect()->route('home');
        $cart = \Session::get('cart');
        $total = $this->total();

        return view('store.order-detail', compact('cart', 'total'));
    }
}
