<?php



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contacts', 'HomeController@contacts')->name('contacts');
Route::get('/aboutUs', 'HomeController@aboutUs')->name('aboutUs');

Route::get('/order', 'OrderController@index')->name('orderIndex');
Route::get('/order/create', 'OrderController@create')->name('orderCreate');
Route::get('/order/cancel', 'OrderController@cancel')->name('orderCancel');
Route::get('/order/info-pay', 'OrderController@orderInfoPay')->name('orderInfoPay');

Route::get('/cabinet', 'UserController@index')->name('cabinet');

Route::get('/tickets', function (){return view('tickets');})->name('tickets');