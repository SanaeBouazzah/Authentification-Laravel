<?php

namespace App\Http\Controllers;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    public function show(string $id)
    {
        $customers = self::getdata();
        $index = array_search($id, array_column($customers, 'id'));
        return view('customers.show', [
          'customer' => $customers[$index]
        ]);
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
