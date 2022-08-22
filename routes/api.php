<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\WebhookController;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('orders', 'OrderController@Create');
Route::get('orders', 'OrderController@index');

Route::post('webhook', 'WebhookController@midtransHandler');