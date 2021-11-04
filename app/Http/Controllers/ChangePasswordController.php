<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ChangePasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index()
    {
        return view('pages.changepassword');
    }
    public function updatePassword(Request $request)
    {
        
        $request->validate([
            'currentpassword' => 'required',
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user = User::findorFail(auth()->user()->id);
        $userPassword = $user->password;
        //dd($request->input('currentpassword'));

        if (!Hash::check($request->input('currentpassword'), $userPassword)) {

            return redirect()->back()->with(['error' => 'Incorrect Password.']);
        }
        $user->update([
            'password'=> Hash::make($request->new_password)
        ]);
        return redirect()->back()->with(['status' => 'Password Changed Successfully.']);
    }
}
