<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList(){
        $product1 = new Product();
    }

    public function productInfo()
    {
        $products = Product::all();
        return view('product_info', compact('products')); 
    }

    public function add()
    {
        return view('add');
    }

    public function addProduct(Request $req)
    {
        // dd($req->all());
        $product = new Product();
        $product -> name = $req -> name;
        $product -> sku = $req -> sku;
        $product -> description = $req -> description;
        $product -> available_quantity = $req -> available_quantity;
        $product -> purchase_price = $req -> purchase_price;
        $product -> save();
        return redirect('/product-info');
        
    }
}
