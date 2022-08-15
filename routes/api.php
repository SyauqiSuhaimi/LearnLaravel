<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyAPI;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("data", [DummyAPI::class, 'getData']);
Route::get("db", [DummyAPI::class, 'getDB']);
Route::post("adddata", [DummyAPI::class, 'addData']);
Route::put("updatedata", [DummyAPI::class, 'updateData']);
Route::delete("deletedata/{id}", [DummyAPI::class, 'deleteData']);
Route::get("search/{id}", [DummyAPI::class, 'search']);
Route::post("testvalid", [DummyAPI::class, 'testValid']);
