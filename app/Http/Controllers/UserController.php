<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
      return view('users.index');
    }
    public function storedata(Request $request){
      $data = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
      ]);

      User::create($data);
      return redirect()->route('home')->with('success', 'you are logged in!!!!!!!!!');
    }
    public function login(){
      return view('users.login');
    }
    public function check(Request $request){
      $email = $request->email;
      $password = $request->password;
      $data = ['email' => $email, 'password' => $password];
      if (Auth::attempt($data)) {
        $request->session()->regenerate();
        return redirect()->route('customers.index')->with('success', 'you are logged in!!!');
      }
      else{
        return redirect()->back()->withErrors([
          'email' => 'email or username are incorrect.'
        ])->onlyInput('email');
      }
    }
    public function logout(){
      Session::flush();
      Auth::logout();
      return redirect()->route('home')->with('success', 'you are logged out!!');
    }
}
