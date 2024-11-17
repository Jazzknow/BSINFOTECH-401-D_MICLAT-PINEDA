<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // ginagamit to para maconnect sa file na to yung ginawang connection galing sa Models/Student.php


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function view()
    {
        $products = Product::all(); // or your specific query
        return view('products.view', ['product' => $products]);

    }

    public function landing()
    {
        $products = Product::all(); // or your specific query
        return view('products.landing', ['product' => $products]);

    }

    public function index()
    {
        $product = Product::all();
        return view('products.index', compact('product'));  //compact(students) means creating array to assign value of the $students

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_name' => 'required|string|max:255|unique:products,product_name',
            'sub_name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Update validation rules for image
        ]);

        // Handle file upload
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/products'), $imageName);

            // Create the product record with the image path
            Product::create([
                'product_name' => $validated['product_name'],
                'sub_name' => $validated['sub_name'],
                'description' => $validated['description'],
                'price' => $validated['price'],
                'photo' => 'images/products/' . $imageName,
            ]);

            return redirect()->route('products.index')->with('success', 'Product created successfully');
        }

        return redirect()->back()->with('error', 'Failed to upload image');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail(($id));
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'product_name' => 'required|string|max:255',
            'sub_name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Made photo optional during update
        ]);

        $product = Product::findOrFail($id);

        // Handle file upload if a new photo is provided
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/products'), $imageName);
            $validate['photo'] = 'images/products/' . $imageName;
        }

        $product->update($validate);
        return redirect()->route('products.index')->with('success', 'Product updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
