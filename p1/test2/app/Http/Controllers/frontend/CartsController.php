<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartsController extends Controller
{
    public function index(){

        $carts= [
            'name'=>'laptop',
            'price'=> '12000',
            'quantity'=>2
        ];
        return view('cart',compact('carts'));
        // return view('cart',[
        //     'data'=> $carts
        // ]); 
    }
    public function create(){
        return view('create-cart');
    }
}