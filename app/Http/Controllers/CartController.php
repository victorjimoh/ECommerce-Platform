<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Gloudemans\Shoppingcart\Facades\Cart;
class CartController extends Controller
{
    public function index(){
        $category = Category::all();
        $cart = Cart::content();
        
        $cartSub = Cart::subtotal();
        return view('pages.cart', ['category' => $category, 'cart'=> $cart, 'cartSub' => $cartSub]);
    }
    public function remove($rowId){
       
     Cart::remove($rowId);
    return redirect()->back();
      
    }
}
