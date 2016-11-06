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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::get('/', function () {
	return realpath(base_path('resource/views'));
});

*/

Route::get('users', function () {
	$users = [

		'0' => [
			'first-name' => 'Rasti',
			'last-name' => 'Faradj',
			'location' => 'Sweden'
		],
		'1' => [
			'first-name' => 'Cristiano',
			'last-name' => 'Ronaldo',
			'location' => 'Portugal'
		]

		];

    return $users;
});
