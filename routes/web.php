<?php
use App\Http\Controllers\UserController;
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

Route::get('/Hero_page', function(){
   echo "Hero page"; 
})->name('hero_page');

Route::get('/section', 'assignment@hero_section')->name('controller');
// Route::get('/users', [UserController::class, 'index']);
Route::get('/users', 'UserController@index')->name('user_index');
Route::get('/users/create', 'UserController@create')->name('user_create');
Route::post('/users/store', 'UserController@store')->name('user_store');
Route::get('/users/delete/{id}', 'UserController@delete')->name('user_delete');
// Route::get('/users/edit/{id}', 'UserController@edit')->name('user_edit');
// Route::get('/users/update/{id}', 'UserController@update')->name('user_update');


