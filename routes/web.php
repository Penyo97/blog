<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'land')->name('land');

Route::get('/main','AuthController@getmain')->name('main');
Route::get('/getlogin','AuthController@getlogin')->name('getlogin');
Route::get('/reg','AuthController@getreg')->name('getreg');
Route::post('/registration','AuthController@registration')->name('regist');
Route::post('/login','AuthController@login')->name('login');
Route::get('/logout','AuthController@logout')->name('logout');


Route::get('/message','MessagesController@message')->name('message');

Route::get('/settings','ProfileController@getsetting')->name('setting');
Route::get('/{id}','ProfileController@getprofile')->name('profile');
Route::post('/img','ProfileController@uploadimg')->name('image');


Route::post('/post','PostController@uploadpost')->name('post');
Route::post('/comment/{id}','PostController@uploadcomment')->name('comment');
Route::get('/like/{id}','PostController@getlike')->name('like');
Route::post('/search','PostController@search')->name('search')->middleware('auth');



Route::post('/friend/{id}','PostController@friend');

