<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json([
            'message' => 'Product List',
            'status' => 200,
            'data' => $products
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'price' => 'required|numeric|min:0',
            'qty' => 'required|integer|min:0',
            'discount' => 'required|numeric|min:0',
            'des' => 'required|string',
        ]);

        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'qty' => $request->qty,
            'discount' => $request->discount,
            'des' => $request->des,
        ]);

        return response()->json([
            'message' => 'Product created successfully',
            'status' => 201,
            'data' => $product
        ]);
    }

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
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

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

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return response()->json([
            'message' => 'Product deleted successfully',
            'status' => 200,
        ]);
    }
}
