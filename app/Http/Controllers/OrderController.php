<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {
        $orders = Order::all();
        return view('orders.index', ['orders' => $orders]);
    }

    public function show($id) {
        $order = order::findOrFail($id);
        return view('orders.show', ['order'=> $order]);
    }

    public function create() {
        return view('orders.create');
    }

    public function store() {
        $order = new Order();
        $order->order_date = request('order_date');
        $order->return_date = request('return_date');
        $order->book_id = request('book_id');
        $order->customer_id = request('customer_id');
        $order->save();
        return redirect('/orders/create')->with('mssg', 'Order registered');
    }

    public function destroy($id) {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect('/orders');
    }

    public function edit($id) {
        $order = Order::findOrFail($id);
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, $id) {
        $order = Order::findOrFail($id);
        $order->order_date = $request['order_date'];
        $order->return_date = $request['return_date'];
        $order->book_id = $request['book_id'];
        $order->customer_id = $request['customer_id'];
        $order->save();
        return redirect('/orders');
    }
}
