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

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('front.landing');

//grouping all routes with same name space and prefix
Route::namespace('BackEnd')->prefix('admin')->middleware('admin')->group(function (){

    Route::get('home','Home@index')->name('home.index');
    Route::get('users','Users@index')->name('users.index');
    Route::get('users/create','Users@create')->name('users.create');
    Route::post('users','Users@store')->name('users.store');
    Route::get('users/{id}','Users@edit')->name('users.edit');
    Route::post('users/{id}','Users@update')->name('users.update');
    Route::get('users/delete/{id}','Users@destroy')->name('users.destroy');

  //  Route::resource('users','Users')->except(['show','delete']);

    // routes for category

    Route::get('categories','Categories@index')->name('categories.index');
    Route::get('categories/create','Categories@create')->name('categories.create');
    Route::post('categories','Categories@store')->name('categories.store');
    Route::get('categories/{id}','Categories@edit')->name('categories.edit');
    Route::post('categories/{id}','Categories@update')->name('categories.update');
    Route::get('categories/delete/{id}','Categories@destroy')->name('categories.destroy');


    // routes for Skills

    Route::get('skills','Skills@index')->name('skills.index');
    Route::get('skills/create','Skills@create')->name('skills.create');
    Route::post('skills','Skills@store')->name('skills.store');
    Route::get('skills/{id}','Skills@edit')->name('skills.edit');
    Route::post('skills/{id}','Skills@update')->name('skills.update');
    Route::get('skills/delete/{id}','Skills@destroy')->name('skills.destroy');

    // routes for Tags

    Route::get('tags','Tags@index')->name('tags.index');
    Route::get('tags/create','Tags@create')->name('tags.create');
    Route::post('tags','Tags@store')->name('tags.store');
    Route::get('tags/{id}','Tags@edit')->name('tags.edit');
    Route::post('tags/{id}','Tags@update')->name('tags.update');
    Route::get('tags/delete/{id}','Tags@destroy')->name('tags.destroy');

    // routes for Pages

    Route::get('pages','Pages@index')->name('pages.index');
    Route::get('pages/create','Pages@create')->name('pages.create');
    Route::post('pages','Pages@store')->name('pages.store');
    Route::get('pages/{id}','Pages@edit')->name('pages.edit');
    Route::post('pages/{id}','Pages@update')->name('pages.update');
    Route::get('pages/delete/{id}','Pages@destroy')->name('pages.destroy');


    // routes for videos
    Route::get('videos','Videos@index')->name('videos.index');
    Route::get('videos/create','Videos@create')->name('videos.create');
    Route::post('videos','Videos@store')->name('videos.store');
    Route::get('videos/{id}','Videos@edit')->name('videos.edit');
    Route::post('videos/{id}','Videos@update')->name('videos.update');
    Route::get('videos/delete/{id}','Videos@destroy')->name('videos.destroy');

    // routes for comments
    Route::post('comments','Videos@commentStore')->name('comment.store');
    Route::get('comments/{id}','Videos@commentDelete')->name('comment.delete');
    Route::post('comments/{id}','Videos@commentUpdate')->name('comment.update');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('skill/{id}', 'HomeController@skills')->name('front.skill');
Route::get('tag/{id}', 'HomeController@tags')->name('front.tag');
Route::get('category/{id}', 'HomeController@category')->name('front.category');
Route::get('video/{id}', 'HomeController@video')->name('front.video');

Route::middleware('auth')->group(function () {

    Route::post('comment/{id}', 'HomeController@commentUpdate')->name('front.commentUpdate');
    Route::post('comment/{id}/create', 'HomeController@commentStore')->name('front.commentStore');

});
