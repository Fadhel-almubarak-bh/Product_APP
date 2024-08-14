<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function highestSpendingCustomer()
{
    // Find the customer with the highest total spending using Eloquent
    $customer = Customer::join('orders', 'customers.customerNumber', '=', 'orders.customerNumber')
        ->join('orderdetails', 'orders.orderNumber', '=', 'orderdetails.orderNumber')
        ->select('customers.customerName', DB::raw('SUM(orderdetails.quantityOrdered * orderdetails.priceEach) AS totalSpent'))
        ->groupBy('customers.customerName')
        ->orderByDesc('totalSpent')
        ->first();

    return view('customers.highest_spending', compact('customer'));
}


public function mostOrdersCustomer()
{
    // Get the customer with the most orders
    $customer = Customer::withCount('orders')
        ->orderBy('orders_count', 'desc')
        ->first();

    return view('customers.most_orders', compact('customer'));
}

    // public function index()
    // {
    //     $customers = Customer::all(); // Retrieve all customers
    //     return view('customers.index', compact('customers'));
    // }   
    public function index()
    {
        $customers = Customer::all(); // Retrieve all customers
        return view('customers.index', compact('customers'));
        
    }   
}
