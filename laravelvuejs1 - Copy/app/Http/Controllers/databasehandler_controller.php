<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\databasehandletablemodel;//import model to read datbase

class databasehandler_controller extends Controller
{
    //
    public function store(Request $request){

        /*
        //die dom= dd()  ek dannne requet wadd blnn
     dd($request-> all());
*/

     $obj_databasehandletablemodel = new databasehandletablemodel;


$this->validate($request,[
    'name'=>'required | max:100 | min:5',
   // thawa thinn puluwan input feild eke name='name' wage ew 
]);


     $obj_databasehandletablemodel->Task=$request->name;
     $obj_databasehandletablemodel -> save();


     $data=databasehandletablemodel :: all();

     return view('databasehandle') -> with('databasehandletablemodels', $data);

     // dd($data);

      //return view('/welcome');
    // return redirect()->back();





    }


}
