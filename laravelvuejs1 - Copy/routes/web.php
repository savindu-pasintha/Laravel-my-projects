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

//default browser eke run wen page ek ok hadat thinne controler wlin
Route::get('/contact', function () {
    return view('contact');
});

//default working page wlt "/" lakun vithrak gahann
Route::get('/', function () {
    return view('welcome');
});




Route::get('/databasehandle', function () {

$data=App\databasehandletablemodel :: all();

    return view('databasehandle')-> with('databasehandletablemodels', $data);
});






Route::get('/mypage', function () {
    return view('mypage');
});

Auth::routes();//authentication hadapuwa oy 
Route::get('/home', 'HomeController@index')->name('home');


//form rout path set to controller
Route::post('/formroutpathinweb_php','databasehandler_controller@store');

/*
Route::get('/mypage', 'HomeController@index')->name('mypage');
*/

/*
Route::get('/contact', function () {
    return view('contact');
});

*/

/*
Route::get('/contact', 'newController@fuck')->name('contact');
*/



/*
Route::get('/contact', function(){
    return view('contact');
});


*/

/*
Auth::routes();
Route::get('/name_of_viewsfile.blaade.php without file extention', 'controller_file_name_of_the_app-Http-controller_folder@function_name')->name('view_file_name');

*/



/*
Route::get('/mypage',function(){
return view('mypage');
});
*/