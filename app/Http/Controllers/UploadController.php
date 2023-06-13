<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function create()
    {
      $photos = Upload::all();
        return view('upload.index', compact('photos'));
    }
    public function store(Request $request)
    {
      if($request->has('photo')){
        $file = $request->photo; //recuperer le nom de champ
        $photo_name = time() . '_' . $file->getClientOriginalName(); //recuperer le nom de fichier
        $file->move(public_path('uploads'), $photo_name);
      }
      // $size = $request->file('photo')->getSize();
      // $name = $request->file('photo')->getClientOriginalName();
      // $request->file('photo')->store('public/images');
    
      // $photo = new Upload();
      // $photo->name = $name;
      // $photo->size = $size;
      // $photo->save();
      Upload::create([
        'photo' => $photo_name,
      ]);
    
      return redirect()->back()->with('success', 'you have added image successfully.');
    }
}