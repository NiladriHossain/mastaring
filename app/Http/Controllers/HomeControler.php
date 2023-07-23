<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControler extends Controller
{
    public function index(){
        return view('frontend.home');

    }

    public function products(){
        return view ('frontend.product.product');
    }
    public function productsDetails(){
        return view ('frontend.product.product_detals');
    }
    public function cart(){
        return view ('frontend.cart.cart');
    }
    public function checkout(){
        return view ('frontend.checkout.checkout');
    }
    public function userLogin(){
        return view ('frontend.user.user-login');
    }
    public function userResister(){
        return view('frontend.user-register');
    }
    public function userAccount(){
        return view('frontend.user.user-account');
    }
}
