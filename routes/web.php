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
    return view('/index');
});


Route::get('/Ar/Home', array('as' => 'index', function(){ return View::make('ar.index');}));
Route::get('/Ar/contact', array('as' => 'contact', function(){ return View::make('ar.contact');}));
Route::get('/Ar/about', array('as' => 'about', function(){ return View::make('ar.about');}));
Route::get('/Ar/clients', array('as' => 'clients', function(){ return View::make('ar.clients');}));
Route::get('/Ar/values', array('as' => 'values', function(){ return View::make('ar.values');}));
Route::get('/Ar/projects', array('as' => 'projects', function(){ return View::make('ar.projects');}));
Route::get('/Ar/services', array('as' => 'services', function(){ return View::make('ar.services');}));

Route::view('/values', 'values')->name('values');
Route::view('/services', 'services')->name('services');
Route::view('/projects', 'projects')->name('projects');
Route::view('/contact', 'contact')->name('contact');
Route::view('/clients', 'clients')->name('clients');
Route::view('/about', 'about')->name('about');
Route::view('/b404', '404')->name('404');
