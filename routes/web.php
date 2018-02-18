<?php


Route::get('/', function () {
	$threads = App\Thread::paginate(15);
    return view('welcome',compact('threads'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/thread','ThreadController');

Route::resource('comment','CommentController',['only'=>['update','destroy']]);

Route::post('comment/create/{thread}','CommentController@addThreadComment')->name('threadcomment.store');

Route::post('reply/create/{comment}','CommentController@addReplyComment')->name('replycomment.store');