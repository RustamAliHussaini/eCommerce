<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use App\Models\Order;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index(){
        if(!Session()->has('user')){
            return redirect('login');
        }
        $data = Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id){
        $data= Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(Request  $req){
         $data = Product::where('name','like','%'.$req->input('query').'%')->get();
         return view('search',['product'=>$data]);
    }
    function adToCart(Request $req){

        if($req->Session()->has('user')){
            $cart = new cart;
            $cart->user_id=$req->Session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('product');


        }else{
            return redirect('login');
        }

    }
    static function cartItem(){
        $userID = Session()->get('user')['id'];
        return  cart::where('user_id',$userID)->count();
    }
    function cartList(){
        $userID = Session()->get('user')['id'];
        $products = DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userID)
        ->select('products.*','carts.id as cart_id')
        ->get();
        // dd($products);
        return view('cartList',['products'=>$products]);
    }
    function removeCart($id){
        cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow(){
        $userID = Session()->get('user')['id'];
        $total = DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userID)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
    }
    function placeOrder(Request $req){
        $userID = Session()->get('user')['id'];
        $allCart = cart::where('user_id',$userID)->get();
        foreach($allCart as $cart){
            $order = new Order;
            $order->user_id = $cart['user_id'];
            $order->product_id = $cart['product_id'];
            $order->status = "pending";
            $order->payment_method = $req->payment_method;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save();
            cart::where('user_id',$userID)->delete();

        }
        return redirect('product');
    }
    function myOrders(){
        $userID = Session()->get('user')['id'];
        $orders = DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userID)
        ->get();

        return view('myorders',['orders'=>$orders]);
    }
}
