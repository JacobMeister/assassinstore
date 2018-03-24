<?php

namespace App\Http\Controllers;
use App\Cart;
use App\CartItem;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function addItem ($productId){
        
        $cart = Cart::where('user_id',Auth::user()->id)->first();
        //if no cart exists for current user, create a new one
        if(!$cart){
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }
        //look if a cartitem exists with current product and increase amount
        $cartItem = CartItem::where('product_id', $productId)->where('cart_id', $cart->id)->first();
        if($cartItem){
            $cartItem->amount++;
            $cartItem->save();

        }
        else{
        //create a new cartitem if none exists
        $cartItem  = new Cartitem();
        $cartItem->product_id=$productId;
        $cartItem->cart_id= $cart->id;
        $cartItem->amount = 1;
        $cartItem->save();
        }
        return redirect('/shoppingcart');
        
    }
       
    public function showCart(){
        //get cart for current user
        $cart = Cart::where('user_id',Auth::user()->id)->first();
        
        if(!$cart){
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }
        //get all cartitems belonging to current cart and calculate total price
        $items = $cart->cartItems;
        $total=0;
        foreach($items as $item){
            $total+=($item->product->price * $item->amount);
        }
        
        return view('main.shoppingcart',['items'=>$items,'total'=>$total]);
    }
    
    public function refreshCart(Request $request){
        //get cart
        $cart = Cart::where('user_id',Auth::user()->id)->first();
        //get all cartitems belonging to current cart and calculate total price
        $items = $cart->cartItems;
        $total=0;
        foreach($items as $item){
            $newAmount = $request->get($item->id);
            if($newAmount){
                $item->amount = $newAmount;
                $item->save();
            }
            
            $total+=($item->product->price * $item->amount);
        }
        
        return view('main.shoppingcart',['items'=>$items,'total'=>$total]);
    }
    
    
    public function removeItem($id){
        //remove cartitem from database
        CartItem::destroy($id);
        return redirect('/shoppingcart');
    }
    
}
