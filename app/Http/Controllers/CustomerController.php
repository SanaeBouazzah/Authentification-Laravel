<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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
    public function store(CustomerRequest $request)
    {
           $formfields = $request->validated();
          $formfields['image'] = $this->uploadImage($request);
          Customer::create($formfields);
           
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
    public function update(CustomerRequest $request, Customer $customer)
    {
      $formfields = $request->validated();

      $formfields['image'] = $this->uploadImage($request);
      $customer->fill($formfields)->save();
      return redirect()->route('customers.index')->with('success', 'You have updated the customer successfully.');
    }
    public function destroy(Customer $customer)
    {
        $customers = Customer::all();
        $customer->delete();
        return redirect()->route('customers.index', compact('customers'))->with('success', 'you have been deleted customer successfully.');
    }
    public function uploadImage(Request $request){
      if($request->hasFile('image')){
        return $request->file('image')->store('images', 'public');
      }
    }
}
