<?php

use Illuminate\Support\Facades\Route;






Route::redirect('/', url('admin/home'));
Route::get('home', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('admin');
Route::get('slider', [App\Http\Controllers\Backend\HomeController::class, 'slider'])->name('slider');
Route::get('information', [App\Http\Controllers\Backend\HomeController::class, 'information'])->name('information');
Route::get('footer', [App\Http\Controllers\Backend\HomeController::class, 'footer'])->name('footer');
// Mission and Vission
Route::get('mission-and-vision', [App\Http\Controllers\Backend\MissionAndVisionController::class, 'index'])->name('mission.and.vision');
Route::get('edit-mission-and-vision/{id}', [App\Http\Controllers\Backend\MissionAndVisionController::class, 'edit'])->name('edit.mission.and.vision');
Route::post('store-mission-and-vision', [App\Http\Controllers\Backend\MissionAndVisionController::class, 'store'])->name('store.mission.and.vision');
Route::post('update-mission-and-vision/{id}', [App\Http\Controllers\Backend\MissionAndVisionController::class, 'update'])->name('update.mission.and.vision');
Route::get('delete-mission-and-vision/{id}', [App\Http\Controllers\Backend\MissionAndVisionController::class, 'delete'])->name('delete.mission.and.vision');
// Event
Route::get('events', [App\Http\Controllers\Backend\EventController::class, 'index'])->name('events');
Route::get('edit-event/{id}', [App\Http\Controllers\Backend\EventController::class, 'edit'])->name('edit.event');
Route::post('store-event', [App\Http\Controllers\Backend\EventController::class, 'store'])->name('store.event');
Route::post('update-event/{id}', [App\Http\Controllers\Backend\EventController::class, 'update'])->name('update.event');
Route::get('delete-event/{id}', [App\Http\Controllers\Backend\EventController::class, 'delete'])->name('delete.event');
//Gallery
Route::get('galleries', [App\Http\Controllers\Backend\GalleryController::class, 'index'])->name('galleries');
Route::get('edit-gallery/{id}', [App\Http\Controllers\Backend\GalleryController::class, 'edit'])->name('edit.gallery');
Route::post('store-gallery', [App\Http\Controllers\Backend\GalleryController::class, 'store'])->name('store.gallery');
Route::post('update-gallery/{id}', [App\Http\Controllers\Backend\GalleryController::class, 'update'])->name('update.gallery');
Route::get('delete-gallery/{id}', [App\Http\Controllers\Backend\GalleryController::class, 'delete'])->name('delete.gallery');
// Biography
Route::get('biography', [App\Http\Controllers\Backend\BiographyController::class, 'index'])->name('biography');
Route::get('edit-biography/{id}', [App\Http\Controllers\Backend\BiographyController::class, 'edit'])->name('edit.biography');
Route::post('store-biography', [App\Http\Controllers\Backend\BiographyController::class, 'store'])->name('store.biography');
Route::post('update-biography/{id}', [App\Http\Controllers\Backend\BiographyController::class, 'update'])->name('update.biography');
Route::get('delete-biography/{id}', [App\Http\Controllers\Backend\BiographyController::class, 'delete'])->name('delete.biography');
// Settings
Route::post('setting-store', App\Http\Controllers\Backend\SettingController::class)->name('settings.store');
