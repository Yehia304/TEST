<?php

use Illuminate\Support\Facades\Route;


Route::get('/testtokenREST','App\Http\Controllers\TokenRequestController@TokenRq');
Route::get('/testtokenSOAP','App\Http\Controllers\TokenRequestController@Sessioncreation');
