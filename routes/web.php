<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SetLocaleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DocumentController;
use PhpParser\Comment\Doc;

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
})->name('home');

Route::get('/etudiant', [EtudiantController::class, 'index'])->name('etudiant.index');
Route::get('/etudiant/{etudiant}', [EtudiantController::class, 'show'])->name('etudiant.show');

Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');

Route::get('/document', [DocumentController::class, 'index'])->name('document.index');


Route::middleware('auth')->group(function(){

    Route::get('/create/etudiant', [EtudiantController::class, 'create'])->name('etudiant.create');
    Route::post('/create/etudiant', [EtudiantController::class, 'store'])->name('etudiant.store');
    Route::get('/edit/etudiant/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiant.edit');
    Route::put('/edit/etudiant/{etudiant}', [EtudiantController::class, 'update'])->name('etudiant.update');
    Route::delete('/etudiant/{etudiant}', [EtudiantController::class, 'destroy'])->name('etudiant.delete');

    Route::get('/create/post', [PostController::class, 'create'])->name('post.create');
    Route::post('/create/post', [PostController::class, 'store'])->name('post.store');
    Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('post.delete');
    Route::get('/edit/post/{post}', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/edit/post/{post}', [PostController::class, 'update'])->name('post.update');

    Route::get('/create/document', [DocumentController::class, 'create'])->name('document.create');
    Route::post('/create/document', [DocumentController::class, 'store'])->name('document.store');
    Route::get('/edit/document/{document}', [DocumentController::class, 'edit'])->name('document.edit');
    Route::put('/edit/document/{document}', [DocumentController::class, 'update'])->name('document.update');
    Route::delete('/document/{document}', [DocumentController::class, 'destroy'])->name('document.delete');
    Route::get('/document/{document}', [DocumentController::class, 'download'])->name('document.download');

});

Route::get('/login', [AuthController::class, 'create'])->name('login');
Route::post('/login', [AuthController::class, 'store'])->name('login.store');
Route::get('/logout', [AuthController::class, 'destroy'])->name('logout')->middleware('auth');

Route::get('/lang/{locale}', [SetLocaleController::class, 'index'])->name('lang');