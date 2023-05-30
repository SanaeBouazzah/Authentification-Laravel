<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    private static function getdata(){
      return[
          ['id' => 1, 'name' => 'LG', 'origin' => 'Morocco'],
          ['id' => 2, 'name' => 'Red', 'origin' => 'Tunis'],
          ['id' => 3, 'name' => 'Local', 'origin' => 'Belgique'],
      ];
    }
    public function index()
    {
      return view('customers.index', [
        'customers' => self::getdata()
      ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $customer = new Customer();
      $customer->name = $request->input('name');
      $customer->origin = $request->input('origin');
      $customer->price = $request->input('price');

      $customer->save();
      return redirect()->route('customers.index');
    }
    public function show(string $id)
    {
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
