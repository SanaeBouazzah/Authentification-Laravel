<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
      return view('users.index');
    }
    public function storedata(){
      validator(request()->all(), [
        'user' => 'required',
        'password' => 'required',
      ])->validate();

      if(auth()->attempt(request()->only(['user','password']))){
        return redirect()->route('users.index')->with('success', 'you are logged in');
      }
      return redirect()->route('customers.index');
    }
}
