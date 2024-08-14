<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<title>Customer List</title>
</head>
@extends('layouts.app')
<body>
<div class="card-header">
    <a href="{{ route('index.index') }}" class="btn btn-primary">
        <i class="fas fa-arrow-left"></i>
    </a>
</div>
<div class="container mt-2">
    <div class="d-flex justify-content-between align-items-center mb-2">
    <h1>Customer List</h1>
<div>
    <a href="{{ route('customers.highestSpending') }}" class="btn btn-primary me-2">highest-spending</a>
    <a href="{{ route('customers.mostOrders') }}" class="btn btn-primary ">most-orders</a>
</div>
</div>

@if($customers->isEmpty())
        <div class="alert alert-warning">
            No customers found.
        </div>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th >#</th>
                    <th>Customer Name</th>
                    <th>Contact Name</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->customerNumber }}</td>
                        <td>{{ $customer->customerName }}</td>
                        <td>{{ $customer->contactFirstName }} {{ $customer->contactLastName }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->city }}</td>
                        <td>{{ $customer->country }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    </body>
</html>
