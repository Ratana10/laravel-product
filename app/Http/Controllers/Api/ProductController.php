<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return response()->json([
            'message' => 'Product fetched',
            'data' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);

        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);

        return response()->json([
            'message' => 'Product created',
            'data' => $product
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json([
                'message' => 'Product not found',
                'data' => null
            ], 404);
        }

        return response()->json([
            'message' => 'Product fetched',
            'data' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);


        $product = Product::find($id);
        if (!$product) {
            return response()->json([
                'message' => 'Product not found',
                'data' => null
            ], 404);
        }

        $product->update($request->all());

        return response()->json([
            'message' => 'Product updated',
            'data' => $product
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json([
                'message' => 'Product not found',
                'data' => null
            ], 404);
        }

        $product->delete();

        return response()->json([
            'message' => 'Product updated',
            'data' =>   null
        ]);
    }
}
