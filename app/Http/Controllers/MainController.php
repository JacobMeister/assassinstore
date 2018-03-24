<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class MainController extends Controller
{
    public function index()
    {
        $productsCovert = Product::where('name', 'LIKE', '%'.'Covert'.'%')->where('archived',false)->get();
        $productsTac4 = Product::where('name', 'LIKE', '%'.'TAC-4 '.'%')->where('archived',false)->get();
        return view('main.index',['productsCovert' => $productsCovert, 'productsTac4'=>$productsTac4]);
        
    }
}
