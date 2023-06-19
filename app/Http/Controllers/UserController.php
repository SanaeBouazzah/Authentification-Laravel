<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
      return view('users.index');
    }
    public function storedata(){
      $data = $request->validate([
        'user' => 'required',
        'password' => 'required',
      ]);

      User::
      return redirect()->route('customers.index');
    }
}
