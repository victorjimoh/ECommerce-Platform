<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Gloudemans\Shoppingcart\Facades\Cart;
class ShopController extends Controller
{
    
    public function index(){
        $category = Category::all();
        $product = Product::paginate(10);
        return view('pages.shop', ['products' => $product, 'category' => $category]);
    }
}
