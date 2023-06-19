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
          $request->validated();
          if ($request->hasFile('image')) {
            $formfields['image'] =  $request->file('image')->store('images', 'public');
          }
          Customer::create([
            'name' => $name,
            'details' => $details,
             'image' => $formfields['image'],
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
      $formfields = $request->validated();

         if ($request->hasFile('image')) {
              $formfields['image'] = $request->file('image')->store('images','public');
         }
      $customer->fill($formfields)->save();
      return redirect()->route('customers.index')->with('success', 'You have updated the customer successfully.');
    }
    public function destroy(Customer $customer)
    {
        $customers = Customer::all();
        $customer->delete();
        return redirect()->route('customers.index', compact('customers'))->with('success', 'you have been deleted customer successfully.');
    }
    private function uploadimage(Request $request){
      if ($request->hasFile('image')) {
        return  $request->file('image')->store('images', 'public');
       }
    }
}
