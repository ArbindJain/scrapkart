<?php

# CSRF Protection
Route::when('*', 'csrf', ['POST', 'PUT', 'PATCH', 'DELETE']);

# Static Pages. Redirecting admin so admin cannot access these pages.
Route::group(['before' => 'redirectAdmin'], function()
{	Route::get('/', ['as' => 'index', 'uses' => 'PagesController@getindex']);
	Route::get('/home', ['as' => 'home', 'uses' => 'PagesController@getHome']);
	Route::get('/about', ['as' => 'about', 'uses' => 'PagesController@getAbout']);
	Route::get('/contact', ['as' => 'contact', 'uses' => 'PagesController@getContact']);
});

# Registration
Route::group(['before' => 'guest'], function()
{
	Route::get('/register', 'RegistrationController@create');
	Route::post('/register', ['as' => 'registration.store', 'uses' => 'RegistrationController@store']);
});

# Authentication
Route::get('login', ['as' => 'login', 'uses' => 'SessionsController@create'])->before('guest');
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::resource('sessions', 'SessionsController' , ['only' => ['create','store','destroy']]);

# Forgotten Password
Route::group(['before' => 'guest'], function()
{
	Route::get('forgot_password', 'RemindersController@getRemind');
	Route::post('forgot_password','RemindersController@postRemind');
	Route::get('reset_password/{token}', 'RemindersController@getReset');
	Route::post('reset_password/{token}', 'RemindersController@postReset');
});


# Standard User Routes
Route::group(['before' => 'auth|standardUser'], function()
{
	Route::get('userProtected', 'StandardUserController@getUserProtected');
	Route::resource('profiles', 'UsersController', ['only' => ['show', 'edit', 'update']]);
	Route::post('profiles'.'')
});

# Admin Routes
Route::group(['before' => 'auth|admin'], function()
{
	Route::get('/admin', ['as' => 'admin_dashboard', 'uses' => 'AdminController@getHome']);
    Route::resource('admin/profiles', 'AdminUsersController', ['only' => ['index', 'show', 'edit', 'update', 'destroy']]);
});


#listing products
Route::group(['before' => 'auth|standardUser'], function()
{
		Route::get('/product', 'ProductsController@create');
		Route::post('/product', ['as' => 'products.store', 'uses' => 'ProductsController@store']);
		Route::get('/list','ProductsController@display');

});

		Route::get('/search',['as' => 'filter.search', 'uses' => 'SearchController@search']);
		Route::post('/search',['as' => 'filter.search', 'uses' => 'SearchController@search']);
		Route::get('/image','ImageController@imageinsert');
//		Route::post('/image',['as' => 'images.store', 'uses' => 'ImageController@imagestore']);
//		Route::get('/imaged','ImageController@imageview');

		Route::post('uploads',function(){
			$user = new Picture();

			$user->user_id = '3';

		    if($image = Input::file('images')){
					$filename = date('Y-m-d-H:i:s')."-".rand(1,100);
					Image::make($image->getRealPath())
								->resize(150,150)
								->save('images/'. $filename);

					$user->images = 'images/'. $filename;
				}else{
					$user->images = 'images/default.jpg';
				}
			    if($user->save()){
			        return 'passed';
			    }
			    else {
			    	return 'failed';
			    }

		});
Route::put('theme',function(){
			return View::make('homepage');
		});

Route::get('/success','MailController@interested');




