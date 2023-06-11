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
           $image = $request->file('image')->store('images', 'public');

          //  2 actions necessary: validation et insertion
          // 1 validation
          $request->validate([
            'name' => 'required',
            'details' => 'required',
            'image' => 'required|image'
          ]);

          // 2 insertion
        Customer::create([
          'name' => $name,
          'details' => $details,
          'image' => $image,
        ]);
           
          return redirect()->route('customers.index')->with('success', 'you have added a customer successfully.');
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
     $formfields = $request->validate([
       'name' => 'required',
       'details' => 'required',
       'image' => 'required'
     ]);
     if($request->hasFile('image')){
      $formfields['image'] = $request->file('image')->store('images', 'public');
     }
     $customer->fill($formfields)->save();
     return redirect()->route('customers.index')->with('success', 'you have been updated customer successfully.');
    }
    public function destroy(Customer $customer)
    {
        $customers = Customer::all();
        $customer->delete();
        return redirect()->route('customers.index', compact('customers'));
    }
}
