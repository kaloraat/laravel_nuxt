 <?php

Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');
Route::get('/user', 'AuthController@user');
Route::post('/logout', 'AuthController@logout');

Route::group(['middleware' => 'api', 'prefix' => 'password'], function () {
	Route::post('create', 'PasswordResetController@create');
	Route::get('find/{token}', 'PasswordResetController@find');
	Route::post('reset', 'PasswordResetController@reset');
});

Route::group(['prefix' => 'topics'], function () {
	Route::post('/', 'TopicController@store')->middleware('auth:api');
	Route::get('/', 'TopicController@index');
	Route::get('/{topic}', 'TopicController@show');
	Route::patch('/{topic}', 'TopicController@update')->middleware('auth:api');
	Route::delete('/{topic}', 'TopicController@destroy')->middleware('auth:api');
	// post route groups
	Route::group(['prefix' => '/{topic}/posts'], function () {
		Route::get('/{post}', 'PostController@show');
		Route::post('/', 'PostController@store')->middleware('auth:api');
		Route::patch('/{post}', 'PostController@update')->middleware('auth:api');
		Route::delete('/{post}', 'PostController@destroy')->middleware('auth:api');
		// likes
		Route::group(['prefix' => '/{post}/likes'], function () {
			Route::post('/', 'PostLikeController@store')->middleware('auth:api');
		});
	});
});