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
        'email' => 'required',
        'password' => 'required',
      ]);
    }
}
