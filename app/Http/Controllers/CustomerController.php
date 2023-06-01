<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
      $customers = Customer::all();
      return view('customers.index', compact('customers'));
    }
    public function create()
    {
    }
    public function store(Request $request)
    {
           $name = $request->name;
           $details = $request->details;

          //  2 actions necessary: validation et insertion
          // 1 validation
          $request->validate([
            'name' => 'required',
            'details' => 'required',
          ]);

          // 2 insertion
          Customer::create([
            'name' => $name,
            'details' => $details
          ]);
          

          return redirect()->route('customers.index');
    }
    public function show($id)
    {
      $customer = Customer::find($id);
      return view('customers.show', compact('customer'));
    }
    public function edit(string $id)
    {
        //
    }
    public function update(Request $request, string $id)
    {
        //
    }
    public function destroy(string $id)
    {
        $customers = Customer::all();
        return redirect()->route('customers.inex', compact('customers'));
    }
}
