<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Models\Customer;

class CustomerController extends Controller
{
    public function create(){
        return inertia::render('create');
    }

    public function store (Request $request){
        $validated= $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:customers',
            'phone' => 'required|max:14|min:10',

        ]);

        Customer::create($validated);


        // $customer = new Customer;
        // $customer->name  = $request->name;
        // $customer->email = $request->email;
        // $customer->phone = $request->phone;
        // $customer->save();


        return Redirect::route('customers.index');
    }
}
