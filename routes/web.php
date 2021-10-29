<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnouncementController;
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
Auth::routes();

Route::get('/', function () {
    // return view('welcome');
    return view('pages.index');
});

Route::get('/candidate', function(){
    return view('pages.candidate');
});


Route::get('/test',  function () {
    return view('test.count');
});

Route::get('/announcement', function(){
    return view('pages.count');
});

Route::get('/announcement/result',[AnnouncementController::class, 'index'])->name('announcement');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//* Voting Route
Route::get('/vote', [VotingController::class, 'index']);
Route::post('/vote/ketua/{id}', [VotingController::class, 'addVoteKetua'])->name('addVoteKetua');
Route::post('/vote/wakil/{id}', [VotingController::class, 'addVoteWakil'])->name('addVoteWakil');
Route::post('/vote/{id}/delete', [VotingController::class, 'deleteVote'])->name('deleteVote');

