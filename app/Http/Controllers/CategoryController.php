<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index($category_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        $category_name =  $category->name;
        $category_id = $category->id;
        $product = Product::where('category_id', $category_id)->paginate(10);
        return view('pages.category', ['products' => $product, 'category' => $category, 'categoryName' => $category_name]);
    }
}
