<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Profile;

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
Route::get('/', function(){
    return view('famdiner.home');
})->name('home');

Route::prefix('/profiles')->name('profile.')->group(function() {
    Route::get('/{profile}', [ProfileController::class, 'edit'])->name('edit');
    Route::put('/{profile}', [ProfileController::class, 'update'])->name('update');
});