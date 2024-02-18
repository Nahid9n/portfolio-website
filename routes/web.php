<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\website\WebsiteController;
use App\Http\Controllers\admin\AdminAuthController;

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

Route::get('/', [WebsiteController::class,'index'])->name('home');




Route::get('/login',[AdminAuthController::class,'index'])->name('admin.login');
Route::post('/login',[AdminAuthController::class,'login'])->name('admin.login');

Route::middleware('auth:web')->prefix('admin')->group(function (){
    Route::get('/dashboard', [DashboardController::class,'index'])->name('admin.dashboard');
    Route::post('/logout', [AdminAuthController::class,'logout'])->name('admin.logout');
});

