<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/project', function()
{
	return View::make('project');
});

Route::get('/employee', function()
{
	return View::make('employee');
});


Route::get('/login', function()
{
	return View::make('login');
});
