<?php

use App\Http\Controllers\ArtisanController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/run-artisan', [ArtisanController::class, 'runCommand']);
Route::get('/commands', [ArtisanController::class, 'view']);
Route::get('/migrate', function (){
    Artisan::call('migrate');
});
