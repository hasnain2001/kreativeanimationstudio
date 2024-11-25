<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::controller(HomeController::class)->group(function(){
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
    // about us pages //
    Route::get('/about/insiht', 'insight')->name('insight');
    Route::get('/about/Client-Onboarding-Process', 'client')->name('client');
    Route::get('/about/Our-Quality-Management', 'management')->name('management');
    Route::get('/about/success-measurement', 'success')->name('success');
    Route::get('/about/project-documentation', 'project')->name('project');
    Route::get('/about/our-process', 'our_process')->name('our-process');


});

require __DIR__.'/auth.php';
