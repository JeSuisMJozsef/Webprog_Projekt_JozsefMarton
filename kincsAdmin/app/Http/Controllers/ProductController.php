<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products= Product::all();
        return view('products.index',compact('products'));
    }
    public function search(Request $request){
        $search=$request->input('search');

        $products= Product::where('name','like','%'.$search.'%')->orWhere('sku','like','%'.$search.'%')->get();
        return view('products.index',compact(['products','search']));
    }
    public function create()
    {
        $categories=Category::all();
        return view('products.create',compact('categories'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'category_id'=>'required',
            'name'=>'required|unique:products,name',
            'sku'=>'required|unique:products,sku',
            'packaging'=>'required',
            'stock'=>'required',
            'price'=>'required'
        ]);
       Product::create($request->all());
       return redirect()->route('products.index')->with('modal', 'productCreated');
    }
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }
    
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category_id'=>'required',
            'name'=>'required|unique:products,name,'.$product->id,
            'sku'=>'required|unique:products,sku,'.$product->id,
            'packaging'=>'required',
            'stock'=>'required',
            'price'=>'required'
        ]);
        $product->update($request->all());
       return redirect()->route('products.index')->with('modal','productEdited');
    }
    
    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('modal', 'productDeleted');
    }
}
