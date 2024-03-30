<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\website\WebsiteController;
use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\WebsiteSettingController;
use App\Http\Controllers\admin\SliderController;

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
Route::controller(WebsiteController::class)->group(function (){
    Route::get('/','index')->name('home');
    Route::get('/service','service')->name('service');
    Route::get('/project','portfolio')->name('project');
    Route::get('/blog','blog')->name('blog');
    Route::get('/blog-details','blogDetails')->name('blog.details');
    Route::get('/about','about')->name('about');
    Route::get('/contact','contact')->name('contact');
    Route::post('/contact-message','contactMessage')->name('contact.message');
    Route::get('/contact-messages','contactMessages')->name('contact.messages');
    Route::get('/contact-messages-show/{id}','contactMessageShow')->name('contact.message.show');
});

Route::get('/login',[AdminAuthController::class,'index'])->name('admin.login');
Route::post('/login',[AdminAuthController::class,'login'])->name('admin.login');

Route::middleware('auth:web')->prefix('admin')->group(function (){
    Route::get('/dashboard', [DashboardController::class,'index'])->name('admin.dashboard');
    Route::post('/logout', [AdminAuthController::class,'logout'])->name('admin.logout');
    Route::resource('services',ServiceController::class);
    Route::post('/services-status/{id}', [ServiceController::class,'updateStatus'])->name('services.status');
    Route::resource('teams',TeamController::class);
    Route::post('/teams-status/{id}', [TeamController::class,'updateStatus'])->name('teams.status');
    Route::resource('blogs',BlogController::class);
    Route::post('/blog-status/{id}', [BlogController::class,'updateStatus'])->name('blogs.status');
    Route::resource('clients',ClientController::class);
    Route::post('/clients-status/{id}', [ClientController::class,'updateStatus'])->name('clients.status');
    Route::get('/website-setup', [WebsiteSettingController::class,'index'])->name('website.setup.index');
    Route::put('/website-setup-update/{id}', [WebsiteSettingController::class,'update'])->name('website.setup.update');
    Route::get('/website-about', [WebsiteSettingController::class,'about'])->name('website.about');
    Route::put('/website-about-update/{id}', [WebsiteSettingController::class,'aboutUpdate'])->name('website.about.update');
    Route::get('/website-contact', [WebsiteSettingController::class,'contact'])->name('website.contact');
    Route::put('/website-contact-update/{id}', [WebsiteSettingController::class,'contactUpdate'])->name('website.contact.update');
    Route::resource('slider',SliderController::class);
    Route::post('/slider-status/{id}', [SliderController::class,'updateStatus'])->name('slider.status');
//    Route::post('/slider-contact/{id}', [SliderController::class,'contact'])->name('admin.contact');


});

