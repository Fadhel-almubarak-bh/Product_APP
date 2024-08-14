
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Highest Spending Customer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <h1>Highest Spending Customer</h1>
    </div>
    

    @if($customer)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Customer Name: {{ $customer->customerName }}</h5>
                <p class="card-text">Total Spent: {{ $customer->totalSpent }}</p>
            </div>
        </div>
    @else
        <div class="alert alert-warning">
            No customer found.
        </div>
    @endif

    </body>
</html>
