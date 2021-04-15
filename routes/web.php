<?php

// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ContactController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\PostController;
// use App\Http\Controllers\ShelfController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ArticleController;

Route::resource('articles', ArticleController::class);
Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf'])->name('cetak_pdf');
// use Symfony\Component\Routing\Loader\Configurator\RouteConfigurator;

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

// PRAKTIKUM AWAL- AWAL


// // Route::get('/', [PageController::class, 'index']);

// // Route::prefix('/')->group(function () {
// //     Route::get('about', [PageController::class, 'about']);
// //     Route::get('articles/{id}', [PageController::class, 'articles']);
// // });
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'index']);
// Route::get('/articles/{id}', [ArticleController::class, 'index']);

// Route::get('home', [HomeController::class, 'index']);

// Route::prefix('home')->group(function () {
//     Route::get('/products', [HomeController::class, 'products']);
//     Route::get('/news/{id}', [HomeController::class, 'news']);
//     Route::get('/program', [HomeController::class, 'program']);
// });
// Route::get('about', [AboutController::class, 'index']);

// Route::get('contact/{no}', [ContactController::class, 'index']);

// PRAKTIKUM AUTH


// Route::get('/', [ShelfController::class, 'index']);

// Route::prefix('/')->group(function () {
//     Route::get('/preview', [ShelfController::class, 'preview']);
//     Route::get('/team', [ShelfController::class, 'team']);
//     Route::get('/contact', [ShelfController::class, 'contact']);
// });
// Route::get('/user', [PostController::class, 'index']);
// Route::get('posts/{slug}', [PostController::class, 'show'])
//     ->name('posts.show');
    
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
