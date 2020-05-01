<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index(){
        $brands = Brand::all();
        $products = Product::with(['brand','photo'])->get();
        return view('index',compact('products','brands'));
    }
    public function productsPerBrand($id){
        $brands = Brand::all();
        $products = Product::with(['brand','photo'])->where('brand_id', '=', $id)->get();
        return view('index', compact('products', 'brands'));
    }
}
