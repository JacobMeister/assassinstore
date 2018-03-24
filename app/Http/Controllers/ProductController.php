<?php

namespace App\Http\Controllers;

use App\Product;
use \Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use App\CartItem;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    protected $loggedInUser;
    
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        //check if the user is an admin, if not, redirect to homepage
         $this->loggedInUser = Auth::user();
           
            if(!$this->loggedInUser->admin){
                return redirect('/');
            } 
            // make array with archived products and one with not active products
            $archivedProducts = Product::where('archived',true)->get();
            $products = Product::where('archived',false)->get();
        return view('cms.products',['products' => $products, 'archivedProducts'=>$archivedProducts]);
    }
    
    public function destroy($id){
        // this function triggers when an object is archived
        // deleted all cartitems that contain the current product, this way the product disappears from all shopping baskets
        $cartItems = CartItem::where('product_id','=',$id)->get();
        foreach($cartItems as $cartItem){
            CartItem::destroy($cartItem->id);
        }
        //look up current product and archive it
        $currentProduct = Product::where('id','=',$id)->first();
        $currentProduct->archived = true;
        $currentProduct->save();
        return redirect('/cms/products');
    }
    //show new product page
    public function newProduct(){
        return view('cms.newProduct');
    }
    
    
    //add new product to database
    public function add() {
        
        $file = Request::file('file');
        $extension = $file->getClientOriginalExtension();
        Storage::disk('public')->put($file->getFilename().'.'.$extension,  File::get($file));
        
        $product  = new Product();
        $product->original_filename = $file->getClientOriginalName();
        $product->name =Request::input('name');
        $product->description =Request::input('description');
        $product->price =Request::input('price');
        $product->category =Request::input('category');
        $product->subcategory = Request::input('subcategory');
        $product->filename = $file->getFilename().'.'.$extension;
        $product->save();
        
        return redirect('/cms/products');
        
    }
    //reactivate product after being archived
    public function activate($id){
        $currentProduct = Product::where('id','=',$id)->first();
        $currentProduct->archived = false;
        $currentProduct->save();
        return redirect('/cms/products');
    }
    
   
    
}
