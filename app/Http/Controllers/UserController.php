<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use Illuminate\Routing\RedirectController;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login( Request $req){

        $user = User::where('email',$req->email)->first();

        if( !$user || !Hash::check($req->password, $user->password)){

            return "Invalid password or email...";
        }else{
            $req->session()->put('user',$user);
            return redirect('product');
        }

    }
    public function register(Request $req){
        $user = new User;
        $user->name = $req['user_name'];
        $user->email = $req['email'];
        $user->password = Hash::make($req['password']);
        $user->save();

        return redirect('login');
    }
}
