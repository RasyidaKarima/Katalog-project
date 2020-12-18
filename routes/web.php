<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/addadmin', 'databarang@index')->name('addadmin');
Route::get('/tambahdata', 'databarang@create')->name('tambahdata');
Route::post('/update/{id}', 'databarang@update')->name('update');
Route::get('/editdata/{id}', 'databarang@edit')->name('editdata');
Route::get('/delete/{id}', 'databarang@destroy')->name('delete');
Route::post('/simpan', 'databarang@store')->name('simpan');
Route::get('/addadmin', 'databarang@index')->name('addadmin');
Route::get('detail/{id}','DetailController@index');

