<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class EditInformationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index(){
        $category = Category::all();
        return view('pages.editinfo', ['category'=> $category]);
    }
    public function updateInfo(Request $request){
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'country' => 'required',
            //'gender' => 'required',
            'phonenumber' => 'required',
        ]);
        $user = User::findorFail(auth()->user()->id);

        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->country = $request->input('country');
       // $user->gender = $request->input('gender');
     //   $user->gender = $request->input('gender');
        $user->phonenumber = $request->input('phonenumber');
        $user->save();
        return redirect()->back()->with(['status' => 'Profile updated successfully.']);
     }
}
