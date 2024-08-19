<?php

use App\Http\Controllers\ProfileController;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

/* ----------------------------- Public routes ----------------------- */
Route::get('/', function () {
    $books = Book::all();

    return Inertia::render('Index', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'books' => $books,
    ]);
})->name('index');

Route::get('/shop', function () {
    $categories = Category::all();

    return Inertia::render('Shop', ['categories' => $categories]);
})->name('shop');

/* ------------------------------- Admin routes ------------------------ */
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/shoppingcart', function () {
    return Inertia::render('Backend/ShoppingCart');
})->middleware(['auth', 'verified'])->name('shoppingcart');

require __DIR__.'/auth.php';
