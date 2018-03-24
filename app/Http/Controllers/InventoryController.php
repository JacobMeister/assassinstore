<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class InventoryController extends Controller
{
    
    //get a list of all products
    public function index(){
        $products = Product::where('archived', false)->get();
        //return view, if no category of subcategory is active, return null, this way the breadcrumbs will not be created
        return view('products.productslist',['products' => $products, 'category' => null, 'subcategory' => null]);
    }
    
    public function product($productId){
        //display product page
        $product = Product::where('id',$productId)->first();
        return view('products.productPage',['product' => $product]);
    }
    //get a list of products of a certain category
    public function categoryList($category){
        $products = Product::where('category','=', $category)->where('archived',false)->get();
        return view('products.productslist',['products' => $products, 'category' => $category, 'subcategory' => null]);
    }
  
    //get a list of products of a certain subcategory
    public function subcategoryList($subcategory){
        $products = Product::where('subcategory','=', $subcategory)->where('archived',false)->get();
        $testproduct = Product::where('subcategory', '=', $subcategory)->first();
        return view('products.productslist',['products' => $products, 'category' => $testproduct->category, 'subcategory' => $subcategory]);
    }
    //get a list of products that match search query
    public function search(Request $request){
        $query = $request->get('search');
        $products = Product::where('name', 'LIKE', '%'.$query.'%')->union(Product::where('description', 'LIKE', '%'.$query.'%'))->where('archived',false)->get();
        return view('products.productslist',['products' => $products, 'category' => null, 'subcategory' => null]);
    }
    
}
