<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use Illuminate\Contracts\Session\Session;

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
}
