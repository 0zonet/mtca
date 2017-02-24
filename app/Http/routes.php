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
/*Front end routes*/
Route::get('/','FrontendController@index');


/*Panel routes*/
Route::get('/panel','PanelController@index')->name('panel.index');


/*Product routes*/
Route::resource('product', 'ProductController');
Route::get('product/{id}/destroy',[
	'uses' => 'ProductController@destroy',
	'as' => 'product.destroy'
]);


/*Auth routes*/
Route::auth();

