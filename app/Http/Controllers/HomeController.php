<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    //
    function index(){
    $data = Product::all();
    return view('home', ['products'=>$data]);
    }
}
