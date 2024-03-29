<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        // return Customer::all();
        return inertia::render('index',[
            'customers' => Customer::all()
        ]);
    }

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


        return Redirect::route('customers.index')->with('message', 'Customer created Successfully');
    }

    public function edit(Customer $customer){
        return Inertia::render('edit', [
            'customer' => $customer
        ]);
        // return $customer;

    }

    public function update(Request $request, Customer $customer){
        $validated= $request->validate([
            'name'  => 'required',
            'email' => 'required|email',
            'phone' => 'required|max:14|min:10',

        ]);
        $customer ->update($validated);

        return Redirect::route('customers.index')->with('message', 'Customer Updated Successfully');

    }

    public function distroy(Customer $customer){
         
        $customer->delete();
        return redirect::route('customers.index')->with('message', 'Customer Deleted Successfully');
    }

}
