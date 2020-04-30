<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller{
    public function index(){
        return Product::orderBy('id', 'desc')->get();
    }
 
    public function store(Request $request){
        $Product = Product::create($request->all());
        return response()->json($Product, 201);
    }
 
    public function update(Request $request, Product $Product){
        $Product->update($request->all());
        return response()->json($Product, 200);
    }
 
    public function delete(Product $Product){
        $Product->delete();
        return response()->json(null, 204);
    }
}
