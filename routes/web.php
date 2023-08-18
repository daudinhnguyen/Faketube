<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChannelController;

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


Route::get('/', [ChannelController::class, 'index'])->name('ChannelList');
Route::get('/create', [ChannelController::class, 'create'])->name('create');
Route::post('/add', [ChannelController::class, 'store'])->name('store');