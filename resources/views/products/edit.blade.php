<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($product) ? 'Edit Product' : 'Add Product' }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
        <div class="card">
            <div class="card-header">
            <a href="{{ route('products.index') }}" class="btn btn-primary">
    <i class="fas fa-arrow-left"></i>
    </a>
    </div>
        <div class="container mt-4">
            <div class="card">
                    
        <h1>{{ isset($product) ? 'Edit Product' : 'Add Product' }}</h1>
        <form action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}" method="POST" class="mt-3">
            @csrf
            @if(isset($product))
                @method('PUT')
            @endif
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ old('name', isset($product) ? $product->name : '') }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" name="description">{{ old('description', isset($product) ? $product->description : '') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" step="0.01" class="form-control" name="price" value="{{ old('price', isset($product) ? $product->price : '') }}" required>
            </div>
            <button type="submit" class="btn btn-success">{{ isset($product) ? 'Update' : 'Add' }} Product</button>
        </form>
    </div>
    
</body>
</html>
