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

Route::get('/contact/{id}', function ($id) {
    return "hello world contact" . $id;
});

Route::get('/', 'AboutController@index');


Route::get('/cds','CdController@list');



Route::get('/products','ProductController@index');



Route::post('/add', function () {
    $data = request()->validate([
        'id' => 'required|max:255',
        'name' => 'required|url|max:255',
        'description' => 'required|url|max:255',
        'price' => 'required|max:255',
    ]);

    App\Product::create($data);

    return redirect('/');
});


