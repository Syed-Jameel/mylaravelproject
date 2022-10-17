<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    //
    function index(){
    $data = Product::all();
    return view('products', ['products'=>$data]);
    }
}