<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemilihController;
use App\Http\Controllers\VotingController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//* Default Route
//* Admin Route
// Route::get('/admin', [DashboardController::class, 'index'])->middleware('admin');
Route::get('/admin', [DashboardController::class, 'index']);

//* Kandidat Route
//* Pemilh Route
Route::prefix('admin')->group(function(){
    Route::resource('voters', PemilihController::class);
    Route::get('voters',[PemilihController::class, 'search'])->name('search');
});

//* Voting Route
Route::get('/vote', [VotingController::class, 'index']);
Route::post('/vote/{id}', [VotingController::class, 'addVote'])->name('addVote');
Route::post('/vote/{id}/delete', [VotingController::class, 'deleteVote'])->name('deleteVote');

