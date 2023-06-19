<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
      return view('users.index');
    }
    public function storedata(Request $request){
      validator(request()->all(), [
        'user' => 'required',
        'password' => 'required',
      ])->validate();

      if(auth()->attempt(request()->only(['email','password{']))){
        return redirect()->route('customers.index');
      }
    }
}
