<?php

use App\Http\Controllers\OstadController;
use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;

Route::get('/', function () {
    // return view('welcome');
    echo 'hello from web';
});

Route::put('/example-endpoint', function () {
    // CSRF is disabled for this route
    echo 'hello';
})->withoutMiddleware([ValidateCsrfToken::class]);

Route::get('/hi',[OstadController::class, 'sayHi']);

Route::get("/greet/{name?}", [OstadController::class, 'greet']);

Route::get("/location",[WeatherController::class, 'displayLocationDetails']);

Route::post("/form",[OstadController::class, 'samplePostRequest'])->withoutMiddleware([ValidateCsrfToken::class]);
Route::get("/form",[OstadController::class, 'sampleGetRequest']);


Route::get('/location', [WeatherController::class, 'location']);

// Route::get('/weather/{location}/country/{country?}', [WeatherController::class, 'weather']);
Route::get('/weather/{location}', [WeatherController::class, 'weather']);

Route::get('/form', [OstadController::class, 'testParmeters']);

// Route redirect
// Route::redirect('/myhome','/');
Route::redirect('/myhome','/', $status = 301); // Permanent Redirection.

// View return form route.
Route::view('/test', 'Test');