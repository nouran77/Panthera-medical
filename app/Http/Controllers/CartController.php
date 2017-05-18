<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::content();
        return view('cart.index',compact('cartItems'));

        return back();
    }



    public function edit($id)
    {

        $product = Product::find($id);

        Cart::add($id,$product->name_english,1,$product->price);
        return back();
    }

    public function show()
    {

    }

    public function update(Request $request, $id)
    {
        Cart::update($id,$request->quantity);
        return back();
    }


    public function destroy($id)
    {
        Cart::remove($id);
        return back();
    }

}
