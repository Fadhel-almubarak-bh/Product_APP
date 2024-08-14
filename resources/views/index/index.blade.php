@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card text-center" style="width: 24rem;">
        <div class="card-body">
            <h1 class="mb-4">Select Task</h1>
            <div class="d-flex flex-column">
                <a href="{{ route('products.index') }}" class="btn btn-primary mb-3">Task 1</a>
                <a href="{{ route('customers.index') }}" class="btn btn-primary">Task 2</a>
            </div>
        </div>
    </div>
</div>
@endsection
