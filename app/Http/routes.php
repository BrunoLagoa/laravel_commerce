<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('exemplo', 'WelcomeController@exemplo');

Route::get('home', 'HomeController@index');

Route::get('admin/categories', 'AdminCategoriesController@index');
Route::get('admin/products', 'AdminProductsController@index');

Route::pattern('id', '[0-9]+');

Route::get('user/{id?}', function($id = 123){
   if($id)
       return "Ola $id";
    return "Não possui ID";
});

Route::get('produtos', ['as' => 'produtos', function(){
    echo Route::CurrentRouteName();
    // return "Produtos";
}]);







/*

Route::get('user/{id?}', function($id = 123){
   if($id)
       return "Ola $id";
    return "Não possui ID";
})->where('id','[0-9]+');

Route::match(['get','post'], 'exemplo2', function(){
   return "oi";
});
Route::any('exemplo2', function(){

});

Route::put('exemplo2', 'WelcomeController@exemplo');
*/