<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
      $customers = Customer::paginate(5);
      return view('customers.index', compact('customers'));
    }
    public function create()
    {
      //
    }
    public function store(Request $request)
    {
           $name = strip_tags($request->name);
           $details = strip_tags($request->details);
           $image = $request->image;

          //  2 actions necessary: validation et insertion
          // 1 validation
          $request->validate([
            'name' => 'required',
            'details' => 'required',
            'image' => 'required|image|mimes: jpg, png, jpeg'
          ]);

          // 2 insertion
          Customer::create([
            'name' => $name,
            'details' => $details,
            'image' => $image,
          ]);
          if($request->image){
            $ext = $request->image->getClientOriginalExtension();
            $newFileName = time().'.'.$ext;
            $request->image->move(public_path().'/public/images/', $newFileName);
            $employee->image =  $newFileName;
            $employee->save();
          return redirect()->route('customers.index')->with('success', 'Employee added successfuly!!');
          }else{
          // return with errors
          return redirect()->route('customers.create')->withErrors($validator)->withInput();
        }
           

          // return redirect()->route('customers.index');
    }
    public function show($id)
    {
      $customer = Customer::find($id);
      return view('customers.show', compact('customer'));
    }
    public function edit( $id)
    {
      $customers = Customer::find($id);
      return view('customers.edit', compact('customers'));
    }
    public function update(Request $request, Customer $customer)
    {

     $formfiedls = $request->validate([
       'name' => 'required',
       'details' => 'required',
     ]);
     $customer->fill($formfiedls)->save();
     return redirect()->route('customers.index');
    }
    public function destroy(Customer $customer)
    {
        $customers = Customer::all();
        $customer->delete();
        return redirect()->route('customers.index', compact('customers'));
    }
}
