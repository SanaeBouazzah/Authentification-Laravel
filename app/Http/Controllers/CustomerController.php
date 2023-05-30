<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
      return view('customers.index', [
        'customers' => Customer::all()
      ]);
    }
    public function create()
    {
        return view('customers.create');
    }
    public function store(Request $request)
    {
      $customer = new Customer();
      $customer->name = $request->input('name');
      $customer->origin = $request->input('origin');
      $customer->price = $request->input('price');

      $customer->save();
      return redirect()->route('customers.index');
    }
    public function show($customer)
    {
      Customer::find($customer);
      return view('customers.show', ['customer' => $index]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
