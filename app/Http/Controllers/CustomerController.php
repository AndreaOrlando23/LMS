<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {
        
        $customers = Customer::all();
        return view('customers.index', ['customers' => $customers]);
    }

    public function show($id) {
        $customer = Customer::findOrFail($id);
        return view('customers.show', ['customer'=> $customer]);
    }

    public function create() {
        return view('customers.create');
    }

    public function store() {
        $customer = new Customer();
        $customer->name = request('name');
        $customer->surname = request('surname');
        $customer->email = request('email');
        $customer->phone = request('phone');
        $customer->category = request('category');
        $customer->course = request('course');
        $customer->save();
        return redirect('/customers/create')->with('mssg', 'Customer registered');
    }

    public function destroy($id) {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect('/customers');
    }

    public function edit($id) {
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $id) {
        $customer = Customer::findOrFail($id);
        $customer->name = $request['name'];
        $customer->surname = $request['surname'];
        $customer->email = $request['email'];
        $customer->phone = $request['phone'];
        $customer->category = $request['category'];
        $customer->course = $request['course'];
        $customer->save();
        return redirect('/customers');
    }

}