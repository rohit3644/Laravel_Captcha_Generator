<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'CaptchaController@index');
Route::get('/refresh', 'CaptchaController@refresh');
Route::post('/validate', 'CaptchaController@CaptchaValidate');
