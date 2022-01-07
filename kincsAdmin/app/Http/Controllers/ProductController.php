<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return response(Product::all(),200);
    }
    
    public function show(Product $product)
    {
        
        return response($product,200);
        
    }
    public function search( $name){
        return response(Product::where('product_name','like','%'.$name.'%')->get(),200);
    }
    
    public function store(Request $request)
    {
        return response(Product::create($request->all()),201);
    }
    
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return response($product,200);
    }
    
    public function delete(Product $product)
    {
        $product->delete();
        return response()->json(null,204);
    }
}
