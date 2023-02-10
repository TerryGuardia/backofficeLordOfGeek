<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JeuController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\TagController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::resource('jeux', JeuController::class);
Route::get('jeux}', [JeuController::class, 'index'])->name('jeux.index');
Route::get('jeux/create', [JeuController::class, 'create'])->name('jeux.create');
Route::post('jeux/store', [JeuController::class, 'store'])->name('jeux.store');
Route::get('jeux/{id}', [JeuController::class, 'show'])->name('jeux.show');
Route::get('jeux/{id}/edit', [JeuController::class, 'edit'])->name('jeux.edit');
Route::put('jeux/{id}', [JeuController::class, 'update'])->name('jeux.update');
Route::delete('jeux/{id}', [JeuController::class, 'destroy'])->name('jeux.destroy');
Route::post('jeux/{id}/attach', [JeuController::class, 'attach'])->name('jeux.attach');
Route::get('jeux/{id_jeu}/detach/{id_tag}', [JeuController::class, 'detach'])->name('jeux.detach');

Route::resource('categories', CategorieController::class);

Route::resource('tags', TagController::class);