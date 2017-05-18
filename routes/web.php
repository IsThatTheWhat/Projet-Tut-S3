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


//Home routes
Route::get('/', 'HomeController@index')->name('home');

//Asso routes
Route::get('/asso', 'AssociationController@index')->name('asso.index');

//Profile routes
Route::get('/profile', 'ProfileController@index')->name('profile');

//Footer routes
Route::get('/contacts', 'FooterController@contacts')->name('contacts');
