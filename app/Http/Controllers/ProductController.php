<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pro = Product::find($id);
        return response()->json([
            'message' => 'Product recieved Successfully',
            'status' => 200,
            'product' => $pro
        ]);
    }

    // YOUR PART
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // YOUR PART
    public function update(Request $request, Product $product)
    {
        $product = Product::findOrFail($product->id);

        $validated = $request->validate([
            'name' => ['sometimes', 'required', 'string', 'max:50'],
            'price' => ['sometimes', 'required', 'numeric', 'min:0'],
            'qty' => ['sometimes', 'required', 'integer', 'min:0'],
            'discount' => ['sometimes', 'required', 'numeric', 'min:0'],
            'des' => ['sometimes', 'nullable', 'string'],

        ]);

        $product->update($validated);

        return response()->json([
            'message' => 'Product updated successfully',
            'status' => 200,
            'product' => $product,
        ]);
    }

    public function destroy(Product $product)
    {
        //
    }
}
