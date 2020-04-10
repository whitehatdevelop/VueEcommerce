<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProductCollection;

class ShoppingCartController extends Controller
{
    public function __construct(){
        $this->middleware('shopping_cart');
    }

    public function show(Request $request){
        $shopping_cart = $request->shopping_cart;
        return view('shopping_cart.show',compact('shopping_cart',$shopping_cart));
    }

    public function products(Request $request){
        return new ProductCollection($request->shopping_cart->products()->get());
    }
}
