<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Gloudemans\Shoppingcart\Facades\Cart;
class ProductDetailsController extends Controller
{
    public function index($slug){
        $category = Category::all();
        $product = Product::where('slug', $slug)->first();
        $related_products = Product::where('category_id', $product->category_id)->inRandomOrder()->limit(4)->get();
        return view('pages.products', 
        ['product' => $product, 
        'category' => $category, 
        'related_products' => $related_products]);
    }
    public function store(Request $request){ 
        $product = Product::findorFail($request->input('product_id'));
       $price = $product->price; 
       
        Cart::add($product->id, $product->name,  1, $price,)->associate('App\Models\Product');
        return redirect()->route('cart')->with(['success'=> 'You have successfully added it to the cart']);

    }

   /**  public function store($slug){
        $product = Product::where('slug', $slug)->first();
        $product_name = $product->name;
        $price = $product->price;
        $product_id = $product->id;
        $quantity = 1;
        Cart::add($product_id, $price,$quantity,$product_name)->asssociate("App\Models\Product");
        return redirect()->route("cart");
    }**/
    
}
