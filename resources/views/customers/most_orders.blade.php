<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer with Most Orders</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
@extends('layouts.app')
<body>
<div class="card-header">
    <a href="{{ route('customers.index') }}" class="btn btn-primary" >
<i class="fas fa-arrow-left"></i>
</a>
</div>
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
<h1 class="mb-4">Customer with Most Orders</h1 >
    </div>


    @if($customer)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Customer Name: {{ $customer->customerName }}</h5>
                <p class="card-text">Total Orders: {{ $customer->orders_count }}</p>
            </div>
        </div>
    @else
        <div class="alert alert-warning">
            No customer found.
        </div>
    @endif

</body>
</html> 