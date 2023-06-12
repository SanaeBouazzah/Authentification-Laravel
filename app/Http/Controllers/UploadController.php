<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function create()
    {
        return view('upload.index');
    }
    public function store(Request $request)
    {
      $name = $request->file('photo')->getClientOriginalName();
      return $name;
        // dd($request->file());
    }
}