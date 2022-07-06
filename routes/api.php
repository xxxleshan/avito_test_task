<?php

use App\Http\Controllers\AddAdvertisementController;
use App\Http\Controllers\GetAdvertisementController;
use App\Http\Controllers\GetAdvertisementsListController;
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

Route::get('/show_ads_list', GetAdvertisementsListController::class);

Route::get('/show_ad', GetAdvertisementController::class);

Route::post('/add_ad', AddAdvertisementController::class);
