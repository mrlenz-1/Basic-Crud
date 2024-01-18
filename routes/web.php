<?php

use App\Http\Controllers\ArticlesController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get("/articles",[ArticlesController::class,"index"])->name("index");
Route::get("/articles/create",[ArticlesController::class,"create"])->name("create");
Route::post("/articles",[ArticlesController::class,"store"]);
Route::get("/articles/{article}",[ArticlesController::class,"show"])->name("show");
Route::get("/articles/{article}/edit",[ArticlesController::class,"edit"])->name("edit");
Route::put("/articles/{article}",[ArticlesController::class,"update"]);
Route::delete("/articles/{article}",[ArticlesController::class,"destroy"]);
