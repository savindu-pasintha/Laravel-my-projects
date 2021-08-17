<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//view folder routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/navigation', function () {
    return view('navigation');
});

Route::get('/master', function () {
    return view('master');
});

Route::get('/form', function () {
    return view('Catagory/form');
});


/* view/Catagary folder in files routes 
Route::get(' search bar http path name ekt, on nmk denn puluwn /new', function () {

    return view(' path of the file in view folder');

    **this route files -- blade.php files located in the view folder**
});
*/
Route::get('/list', function () {
    return view('Catagory/list');
});

Route::get('/create', function () {
    return view('Catagory/create');
});

//1-controller call in route 
Route::get('Catagory/edit','CatagoryController@catagoryEdit');
//2-rout oy ways 2tma wad ,dekm liuwath wad karanwa
Route::get('/edit', function () {
    return view('Catagory/edit');
});



//1-controller call in route 
/*Route::get('/form', function () {
    return view('Catagory/form');
});
*/
Route::get('Catagory/create','CatagoryController@catagoryList');


//route to link set in button 
Route::get('Catagory/create','CatagoryController@catagoryList')->name('createpagetogo');

//form sublite route set
//Route::get('/form','CatagoryController@formdatabase');
Route::post('/formroute','CatagoryController@formdatabase');




