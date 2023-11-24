<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [adminController::class, 'home'])->name("home");
Route::get('messagerie/', [adminController::class, 'mailbox'])->name("user-mailbox");
Route::get('recherche/', [adminController::class, 'search'])->name("search-troc");
Route::get('partage/', [adminController::class, 'addtroc'])->name("add-troc");
Route::get('editprofil/', [adminController::class, 'modifierprofil'])->name("edit-profil");
