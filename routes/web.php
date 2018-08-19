<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::name('admin.')->prefix('admin')->group(function () {


	Route::get('/', 'AdminController@index')->name('index');

	// Dashboard auth routes ==============================================================
	

	Route::get('/login', 'AdminController@login')->name('login');
	Route::get('/register', 'AdminController@register')->name('register');
	Route::get('/password/reset', 'AdminController@password_reset')->name('password.reset');


	// Clients routes =====================================================================
	
	Route::get('/client', 'AdminController@client_index')->name('client.index');
	Route::get('/client/{id}', 'AdminController@client_show')->name('client.show');
	Route::get('/client/{id}/edit', 'AdminController@client_edit')->name('client.edit');

	// Screens routes =====================================================================

	Route::get('/screen', 'AdminController@screen_index')->name('screen.index');
	Route::get('/screen/{id}', 'AdminController@screen_show')->name('screen.show');
	Route::get('/screen/{id}/edit', 'AdminController@screen_edit')->name('screen.edit');

	// Screens routes =====================================================================

	Route::get('/plan', 'AdminController@plan_index')->name('plan.index');
	Route::get('/plan/{id}', 'AdminController@plan_show')->name('plan.show');
	Route::get('/plan/{id}/edit', 'AdminController@plan_edit')->name('plan.edit');

});