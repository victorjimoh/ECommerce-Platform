<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class HomePageController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('pages.home', ['category' => $category]);
    }
}
