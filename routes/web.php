<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');



Route::get('/talents', function (){
    return view('talents');

});

Route::get('/todos',function (){
     return view('todos');

});

Route::get('/application',function (){
    return view('application');

});

Route::get('/dativa',function (){
    return view('dativa');

});

Route::get('mypage',function (){
   $data =array(
       'var1'=> 'Hamburger',
       'var2'=> 'Hot Dog',
       'var3'=> 'French Fries',
//       'order'=>App\OrderModel::all();
   );
   return view('mypage', $data);
});

Route::get('app', function (){
   return view('app');
});


Route::get('child', function () {
    return view('child');
});