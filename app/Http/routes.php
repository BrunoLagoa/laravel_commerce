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

Route::get('categories', 'CategoriesController@index');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'admin'], function(){
    Route::group(['prefix' => 'categories'], function(){
        Route::get('', ['as' => 'admin.categories.index', 'uses' => 'AdminCategoriesController@index']);
        Route::get('create', ['as' => 'admin.categories.create', 'uses' => 'AdminCategoriesController@index']);
        Route::get('store', ['as' => 'admin.categories.store', 'uses' => 'AdminCategoriesController@index']);
        Route::get('show/{id?}', ['as' => 'admin.categories.show', 'uses' => 'AdminCategoriesController@index']);
        Route::get('edit/{id?}', ['as' => 'admin.categories.edit', 'uses' => 'AdminCategoriesController@index']);
        Route::get('update/{id?}', ['as' => 'admin.categories.update', 'uses' => 'AdminCategoriesController@index']);
        Route::get('destroy/{id?}', ['as' => 'admin.categories.destroy', 'uses' => 'AdminCategoriesController@index']);
    });
    Route::group(['prefix' => 'products'], function(){
        Route::get('', ['as' => 'admin.products.index', 'uses' => 'AdminProductsController@index']);
        Route::get('create', ['as' => 'admin.products.create', 'uses' => 'AdminProductsController@index']);
        Route::get('store', ['as' => 'admin.products.store', 'uses' => 'AdminProductsController@index']);
        Route::get('show/{id?}', ['as' => 'admin.products.show', 'uses' => 'AdminProductsController@index']);
        Route::get('edit/{id?}', ['as' => 'admin.products.edit', 'uses' => 'AdminProductsController@index']);
        Route::get('update/{id?}', ['as' => 'admin.products.update', 'uses' => 'AdminProductsController@index']);
        Route::get('destroy/{id?}', ['as' => 'admin.products.destroy', 'uses' => 'AdminProductsController@index']);
    });
});


/*

Route::get('produtos', ['as' => 'produtos', function(){
    echo Route::CurrentRouteName();
    // return "Produtos";
}]);


Route::get('category/{category}', function(\CodeCommerce\Category $category){
    dd($category);
});


Route::pattern('id', '[0-9]+');

Route::get('user/{id?}', function($id = 123){
   if($id)
       return "Ola $id";
    return "Não possui ID";
});


Route::get('category/{id}', function($id){
    $category = new \CodeCommerce\Category();
    $c = $category->find($id);

    return $c->name;
});

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