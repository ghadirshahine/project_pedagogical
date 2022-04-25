<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
<<<<<<< HEAD

Route::post('register','ApiAuthController@register');
Route::post('login','ApiAuthController@login');


Route::middleware('auth:api')->group( function() {
    Route::resource('comments','CommentController');
});
=======
Route::middleware('auth:api')->group( function () {
      Route::resource('posts','PostController');
});
>>>>>>> 19869297f653205e3be51fb2c946020635005a7d
