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

