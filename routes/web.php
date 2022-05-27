<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormControl;
use App\Http\Controllers\databaseController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\HttpController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ListController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('hello' );
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get("url", [UserController::class, 'viewLoad']);

Route::get("user/{name}", [Users::class, 'index']);

Route::post("submit", [FormControl::class, 'getData']);

Route::view("/noaccess","noaccess");

Route::group(['middleware' => ['protected']], function()
{
    Route::view("/form","form");
});

Route::get("db", [databaseController::class, 'index']);
Route::get("api", [ApiController::class, 'index']);

Route::view("/http","http");

Route::put("httpreq", [HttpController::class,'testRequest']);

Route::view("upload", "upload");
Route::post("upload", [UploadController::class,'uploadFile']);

Route::get("list", [ListController::class, 'index']);

Route::view("add", "addMember");
Route::post("add", [ListController::class, 'addData']);


Route::get("delete/{id}", [ListController::class, 'deleteData']);

Route::get("edit/{id}", [ListController::class, 'editData']);
Route::post("update", [ListController::class, 'updateData']);

Route::get("operate", [ListController::class, 'operation']);