<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function allOrders()
    {
        return view('backend.pages.orders.all_orders');
    }
    public function pendingOrders()
    {
        return view('backend.pages.orders.pending_orders');
    }
    public function processingOrders()
    {
        return view('backend.pages.orders.processing_orders');
    }
    public function completedOrders()
    {
        return view('backend.pages.orders.completed_orders');
    }
    public function declinedOrders()
    {
        return view('backend.pages.orders.declined_orders');
    }
}
