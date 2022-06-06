<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

*/
//Route::post('/register', 'Auth\UserAuthController@register');
Route::post('registers',[UserAuthController::class,'register']); // add new style
// Route::post('/login', 'Auth\UserAuthController@login');
Route::post('logins',[UserAuthController::class,'login']); // add new style

Route::apiResource('/employee', EmployeeController::class)->middleware('auth:api');