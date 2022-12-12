<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [articleController::class, 'index'])->name('index');
// ---------------------
Route::prefix("produk")
    ->name("produk.")
    ->controller(produkController::class)
    ->group(function () {
        Route::get("/", "index")->name('index');
        Route::get("/edit/{produk}", "edit")->name("edit");
        Route::get("/create", "create")->name("create");

        Route::post("/store", "store")->name("store");
        Route::put("/update/{produk}", "update")->name("update");
        Route::delete("/destroy/{produk}", "destroy")->name("destroy");
    });
// Route::resource('produk', ProdukController::class)->except(['show']);
// ----------------
Route::prefix("article")
    ->name("article.")
    ->controller(articleController::class)
    ->group(function () {
        Route::get("/", "list")->name('index');
        Route::get("/detail/{article}", "detail")->name("detail");
        Route::get("/edit/{article}", "edit")->name("edit");
        Route::get("/create", "create")->name("create");

        Route::post("/store", "store")->name("store");
        Route::put("/update/{article}", "update")->name("update");
        Route::delete("/destroy/{article}", "destroy")->name("destroy");
    });
