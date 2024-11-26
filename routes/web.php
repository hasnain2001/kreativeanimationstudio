<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}) ->name('home');
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
// sevices Animated Videos   pages //
Route::get('/2d-animation-service', 'animation_2d')->name('animation-2d');
Route::get('/3d-animation-service', 'animation_3d')->name('animation-3d');
Route::get('/animated-explainer-video-service', 'explain_video')->name('explain-video');
Route::get('/motion-graphics-design-service', 'motion_graphic')->name('motion-graphics');
Route::get('/animated-promotional-video-service', 'promotional_video')->name('promotional_video');
Route::get('/stop-motion-animation-service', 'stop_motion')->name('stop_motion');
Route::get('/animated-logo-design-service', 'logo_animation')->name('logo_animation');
Route::get('/whiteboard-animation-service', 'whiteboard')->name('whiteboard');

});

require __DIR__.'/auth.php';
