<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\userData;

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
Route::post('/submit',[userData::class, 'insertData']);
Route::get('/showdata',[userData::class, 'showData']);

//Route::get('edit/{id}',['as'=>'edit','uses'=>'userData@editData'] );
Route::post('edit',[userData::class, 'editData']);
Route::post('delete',[userData::class, 'deleteData']);
Route::post('editdata',[userData::class, 'editedData']);