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
      $size = $request->file('photo')->getSize();
      $name = $request->file('photo')->getClientOriginalName();
      $path = $request->file('photo')->store('public/images');
    
      $photo = new Upload();
      $photo->name = $name;
      $photo->size = $size;
      $photo->path = $path;
      $photo->save();
    
      return redirect()->back();
    }
}