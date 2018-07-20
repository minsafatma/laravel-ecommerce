

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

//Frontend site....................
Route::get('/', 'HomeController@index');

//show category wise product here

Route::get('/product_by_category/{category_id}', 'HomeController@show_product_by_category');
Route::get('/product_by_manufacture/{manufac_id}','HomeController@show_product_by_manufacture');

Route::get('/view_product/{product_id}', 'HomeController@product_details_by_id');










//backend route.......................

Route::get('/logout','SuperAdminController@logout');
Route::get('/admin', 'AdminController@index');

Route::get('/dashbord', 'SuperAdminController@index')->name('dashboard');

Route::post('/admin-dashbord','AdminController@login'); 





//category related route..........................
Route::get('/add-category', 'CategoryController@index');
Route::get('/all-category', 'CategoryController@all_category');
Route::post('/save-category', 'CategoryController@save_category');
Route::get('/edit-category/{category_id}', 'CategoryController@edit_category');
Route::post('/update-category/{category_id}', 'CategoryController@update_category');
Route::get('/delete-category/{category_id}', 'CategoryController@delete_category');
Route::get('/unactive_category/{category_id}', 'CategoryController@unactive_category');
Route::get('/active_category/{category_id}', 'CategoryController@active_category');


//manufacture........................brands......
Route::get('/add-manufacture', 'ManufactureController@index');
Route::post('/save-manufacture', 'ManufactureController@save_manufacture');
Route::get('/all-manufacture', 'ManufactureController@all_manufacture');
Route::get('/delete-manufacture/{manufac_id}', 'ManufactureController@delete_manufacture');

Route::get('/unactive_manufacture/{manufac_id}', 'ManufactureController@unactive_manufacture');
Route::get('/active_manufacture/{manufac_id}', 'ManufactureController@active_manufacture');
Route::get('/edit-manufacture/{manufac_id}', 'ManufactureController@edit_manufacture');
Route::post('/update-manufacture/{manufac_id}', 'ManufactureController@update_manufacture');



// products toutes....,,,,,,,..........
Route::get('/add-product', 'ProductController@index');
Route::post('/save-product', 'ProductController@save_product');
Route::get('/all-product', 'ProductController@all_product');
Route::get('/delete-product/{product_id}', 'ProductController@delete_product');
Route::get('/unactive_product/{product_id}', 'ProductController@unactive_product');
Route::get('/active_product/{product_id}', 'ProductController@active_product');
Route::get('/delete-product/{product_id}', 'ProductController@delete_product');
