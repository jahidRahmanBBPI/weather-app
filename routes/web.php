<?php

use App\Http\Controllers\OstadController;
use App\Http\Controllers\TestController;
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
// Route::view('/test', 'Test');

// data sent in blade.
// Route::view('/test', 'Test', ['title'=> 'My Title']);


// Route with parameters
// Route::get('/user/{id}/profile/{name}', function($id, $name){
//     return "welcome To User $id - $name";
// });


// Route with optional parameters
// Route::get('/user/{id}/profile/{name?}', function($id, $name = ''){
//     return "welcome To User $id - $name";
// });

// Named Route
// Route::view('/test', 'Test', ['title'=> 'My Title']);
// Route::get('/post', function(){
//     return "Post page";
// })->name('post');

// Route Grouping.
// Route::group(['prefix' => 'user'], function(){
//     Route::get('/', function(){
//     return "User page";
// })->name('user');

// Route::get('/{id}', function($id){
//     return "User page $id";
// })->name('user.show');

// Route::get('/{id}/edit', function($id){
//     return "User page $id edit";
// })->name('user.edit');

// });


Route::get('/test/{id}', [TestController::class, 'test'])->name('user');
Route::get('/post', function(){
    return "Post page";
})->name('post');
