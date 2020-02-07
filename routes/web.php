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


Route::get('/welcome', function () {
    return view('win32_get_last_control_message()');
});

//search ..


Route::post('/search', 'ProduitController@search');


//end search !



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/parametres/{id}', 'MarqueController@afficher');

// affichage Client

Route::get('/produits/{key}','ProduitController@afficher');

// Edit product Admin

Route::post('/Add/{Marque}', 'MarqueController@Add');

Route::get('/Delete/{id}', 'MarqueController@Delete');

Route::get('/Update/{id}/{id_marque}', 'MarqueController@Update');


Route::post('/Update/{id}', 'MarqueController@Update');





