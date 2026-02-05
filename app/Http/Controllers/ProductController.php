<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * GET /api/products
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Store a newly created resource in storage.
     * POST /api/products
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        return Product::create($request->all());
    }

    /**
     * Display the specified resource.
     * GET /api/products/{id}
     */
    public function show($id)
    {
        return Product::find($id);
    }

    /**
     * Update the specified resource in storage.
     * PUT/PATCH /api/products/{id}
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /api/products/{id}
     */
    public function destroy($id)
    {
        return Product::destroy($id);
    }
}
