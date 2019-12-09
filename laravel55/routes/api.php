<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['namespace' => 'Api'], function(){
    // 控制器在 "App\Http\Controllers\Home" 命名空间下
    Route::get('/', 'IndexController@index');
    Route::get('index.home', 'IndexController@home');
    Route::get('index.test/id/{id}/num/{num}', 'IndexController@test');

    Route::post('index.testpost', 'IndexController@testpost');
});
/////////////////////////////////////////////////////////////////////////////////////////////////
//后台路由组
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
    // 控制器在 "App\Http\Controllers\Admin" 命名空间下
    Route::get('/', 'AdminController@index');
});