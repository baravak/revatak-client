<?php

use Illuminate\Support\Facades\Route;
Route::get('/', 'HomeController@index')->name('home');
Route::get('/story/{story}', 'HomeController@show')->name('stories.show');
Route::get('+/{term}/{subTerm?}', 'TermPostController@index')->name('termPost.index')->where(['subTerm' => 'term=[^=\/]+']);
Route::get('+/{term}/term={subTerm}', 'TermPostController@index')->name('termPost.subIndex');

Route::get('+/{term}/{post}', 'TermPostController@show')->name('termPost.show')->where(['post' => '/[^=]+/']);
