<?php


Route::get('/', function () {
	$threads = App\Thread::paginate(15);
    return view('welcome',compact('threads'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/thread','ThreadController');