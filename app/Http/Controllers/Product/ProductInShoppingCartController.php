<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProductInShoppingCart;

class ProductInShoppingCartController extends Controller
{

    public function __construct(){
        $this->middleware('shopping_cart');
    }

    public function store(Request $request){
        //dd($request);
        $in_shopping_cart = ProductInShoppingCart::create([
            'shopping_cart_id' => $request->shopping_cart->id,
            'product_id' => $request->product_id
        ]);

        if ($in_shopping_cart) {
            return redirect()->back();
        }else{
            return redirect()->back()->withErrors(['product' => 'No se pudo agregar el producto']);
            
        }
    }
    public function destroy($id)
    {
        //
    }
}
