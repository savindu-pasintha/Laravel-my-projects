<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Catagory;

class CatagoryController extends Controller
{
    /* 
    public function functionname_or_methodname(){
        return view('path of blade.php file in the view folder');


        //controller ek web.php rout file ek call krddi
          
        //  Route::get('Catagory/edit','CatagoryController@catagoryList');
        
    }
    **/
    public function catagoryEdit(){
        return view('Catagory/edit');
       
    }


    public function catagoryList(){
        return view('Catagory/create');
       
    }

//form post method route
    public function formdatabase(Request $request){
        $new =new Catagory::create($request -> all());

       return redirect()->back();
    }

}

