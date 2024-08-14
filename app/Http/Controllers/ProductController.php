<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        foreach ($products as $product) {
            \Log::info('Product ID for show route:', ['id' => $product->id]);
        }
        return view('products.index', compact('products'));
    }


    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'description' => 'nullable',
        'price' => 'required|numeric',
    ]);

    // Remove _token from the request data
    $data = $request->except('_token');

    Product::create($data);

    return redirect()->route('products.index')
        ->with('success', 'Product created successfully.');
}

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
{
    $request->validate([
        'name' => 'required',
        'description' => 'nullable',
        'price' => 'required|numeric',
    ]);

    // Remove _token from the request data
    $data = $request->except('_token');

    $product->update($data);

    return redirect()->route('products.index')
        ->with('success', 'Product updated successfully.');
}

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }
}


