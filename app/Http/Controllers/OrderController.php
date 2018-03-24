<?php

namespace App\Http\Controllers;


use App\Order;
use Illuminate\Support\Facades\Auth;
use App\CartItem;
use App\OrderItem;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cart;

class OrderController extends Controller
{
    
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function checkout()
    {
        //get cart with cartitems from db
        $cart = Cart::where('user_id',Auth::user()->id)->first();
        $items = $cart->cartItems;
        
       //calculate total price for shopping cart
        $total=0;
        foreach($items as $item){
            $total+=($item->product->price*$item->amount);
        }
        //if there are no items in shopping cart, return to shopping cart
        if($total == 0){
            return redirect('/shoppingcart');
        }
        //create new order
        $order = new Order();
        $order->price= $total;
        $order->user_id=Auth::user()->id;
        $order->save();
        //convert all cartitems to orderitems
        foreach($items as $item){
            $orderItem = new OrderItem();
            $orderItem->order_id=$order->id;
            $orderItem->product_id=$item->product->id;
            $orderItem->amount=$item->amount;
            $orderItem->save();
            //delete cartitem to empty shopping cart
            CartItem::destroy($item->id);
        }
        return redirect('/order/'.$order->id);
        
    }
    //show all orders made by current user, last orders at the top
    public function index(){
        $orders = Order::where('user_id',Auth::user()->id)->orderBy('created_at', 'desc')->get();
        $text = "Your Orders";
        return view('orders.orderlist',['orders'=>$orders ,'text' => $text]);
    }
    //show all orders 
    public function cmsIndex(){
        $orders = Order::orderBy('created_at', 'desc')->get();
        $text = "All Orders";
            return view('orders.orderlist',['orders'=>$orders, 'text' => $text]);
    }
    //show single order with information
    public function viewOrder($orderId){
        $order = Order::find($orderId);
        return view('orders.view',['order'=>$order]);
    }
}