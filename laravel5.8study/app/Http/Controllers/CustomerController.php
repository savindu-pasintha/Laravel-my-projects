<?php

namespace App\Http\Controllers;
use  App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list(){
        $arr=['savindu','supun','oshada'];

       return view('About',['arr'=>$arr]);
    }
}
