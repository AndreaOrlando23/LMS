<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index() {
        
        $customers = Customer::all();
        return view('customers.index', ['customers' => $customers]);
    }

    public function show($id) {
        $customer = Customer::findOrFail($id);
        return view('customers.show', ['customer'=> $customer]);
    }
}