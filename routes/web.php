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


});
// sevices Animated Videos   pages //
Route::controller(HomeController::class)->prefix('service')->group(function(){
Route::get('/2d-animation', 'animation_2d')->name('animation-2d');
Route::get('/3d-animation', 'animation_3d')->name('animation-3d');
Route::get('/animated-explainer-video', 'explain_video')->name('explain-video');
Route::get('/motion-graphics-design', 'motion_graphic')->name('motion-graphics');
Route::get('/animated-promotional-video', 'promotional_video')->name('promotional_video');
Route::get('/stop-motion-animation', 'stop_motion')->name('stop_motion');
Route::get('/animated-logo-design', 'logo_animation')->name('logo_animation');
Route::get('/whiteboard-animation', 'whiteboard')->name('whiteboard');
Route::get('/storyboard-animation', 'storyboard')->name('storyboard');
Route::get('/frame-by-frame-animation', 'frame_by_frame')->name('frame_by_frame');
Route::get('/video-editing', 'video_editing')->name('video-editing');
Route::get('/character-animation', 'character_animation')->name('character_animation');
Route::get('/3d-character-modeling', 'character_modeling')->name('character_modeling');
Route::get('/3d-sculping', 'sculping')->name('3d-sculping');
Route::get('/30-seconds-video-making', 'second_30')->name('30-seconds');
Route::get('/60-seconds-video-making', 'second_60')->name('60-seconds');
Route::get('/90-seconds-video-making', 'second_90')->name('90-seconds');
Route::get('/info-graphics-video', 'info_graphic')->name('info-graphics');
Route::get('/rotoscoping', 'rotoscoping')->name('rotoscoping');
Route::get('/concept-art', 'concept_art')->name('concept-art');

});

// Industry Animation  pages  route //
Route::controller(HomeController::class)->prefix('service')->group(function(){
    Route::get('/medical-animation', 'medical_health')->name('medical_health');
    Route::get('/scientific-animation', 'scientific_animation')->name('scientific_animation');
    Route::get('/educational-animation', 'educational_animation')->name('educational-animation');
    Route::get('/animated-music-video', 'animated_music_video')->name('animated_music_video');
    Route::get('/3d-architectural-animation', 'architectural_animation')->name('3d-architectural-animation');
    Route::get('/commercial-animation', 'commercial_animation')->name('commercial-animation'); 
 

   });
   Route::controller(HomeController::class)->prefix('services')->group(function(){
    Route::get('/game-animation', 'game_animation')->name('game-animation'); 
    Route::get('/game-character-animation', 'game_character_animation')->name('game-character-animation'); 
   });

require __DIR__.'/auth.php';
