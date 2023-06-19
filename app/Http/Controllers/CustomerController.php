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
          $request->validate([
            'name' => 'required',
            'details' => 'required',
            'image' => 'required|image|mimes:svg,png,jpg,jpeg|max:10240'
          ]);
          
          if ($request->hasFile('image')) {
            $formfields['image'] =  $request->file('image')->store('images', 'public');
        }
=======
            'image' => 'required|image'
          ]);
>>>>>>> f4f0dce881b1782fb15e921c127f31cb45b52267

          // 2 insertion
        Customer::create([
          'name' => $name,
          'details' => $details,
<<<<<<< HEAD
          'image' => $formfields['image'],
=======
          'image' => $image,
>>>>>>> f4f0dce881b1782fb15e921c127f31cb45b52267
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
<<<<<<< HEAD
        'image' => 'required'
       ]);

       if ($request->hasFile('image')) {
        $formfields['image'] = $request->file('image')->store('images','public');
    }
      $customer->fill($formfields)->save();
      return redirect()->route('customers.index')->with('success', 'You have updated the customer successfully.');
=======
        'image' => 'required | image'
    ]);

    if ($request->hasFile('image')) {
        $formfields['image'] = $request->file('image')->store('images', 'public');
    }

    $customer->fill($formfields)->save();

    return redirect()->route('customers.index')->with('success', 'You have updated the customer successfully.');
>>>>>>> f4f0dce881b1782fb15e921c127f31cb45b52267
    }
    public function destroy(Customer $customer)
    {
        $customers = Customer::all();
        $customer->delete();
<<<<<<< HEAD
        return redirect()->route('customers.index', compact('customers'))->with('success', 'you have been deleted customer successfully.');
    }
    private function uploadimage(Request $request){
      if ($request->hasFile('image')) {
        return  $request->file('image')->store('images', 'public');
       }
    }
}
=======
        return redirect()->route('customers.index', compact('customers'));
    }
}
>>>>>>> f4f0dce881b1782fb15e921c127f31cb45b52267
