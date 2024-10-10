<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\TravellerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/index', [RedirectController::class, 'roleRedirection'])->name('index');
    Route::get('/traveller', [VerifyEmailController::class, 'roleRedirection'])->name('traveller');
    
});



Route::get('/traveller2',[TravellerController::class,'traveller'])->name('form-show');
Route::post('/traveller-form',[TravellerController::class,'travellerStore'])->name('trip-detail-form-store');
Route::get('/traveller-detail-view/{u_id}', [TravellerController::class, 'detail_view'])->name('traveller-detail-view');
Route::get('/trip-detail-edit-store/{u_id}', [TravellerController::class, 'trip_form_edit'])->name('trip-detail-edit');
Route::post('/trip-detail-edit-store/{u_id}', [TravellerController::class, 'trip_form_edit_store'])->name('trip-detail-edit-store');
Route::get('/traveller-detail-view',[TravellerController::class,'allRecord'])->name('traveller-detail-view2');

Route::get('/traveller3',[TravellerController::class,'travellerjoin']);
Route::get('/diary',[TravellerController::class,'diary']);
// Route::post('/traveller-form',[TravellerController::class,'travellerStore']);
Route::get('/userDel/{u_id}', [TravellerController::class, 'tripDel'])->name('userDel');
Route::post('/trip-diary-store', [TravellerController::class, 'trip_diary'])->name('trip-diary-store');
Route::get('/trip-diary',[TravellerController::class,'allRecord2'])->name('trip-diary2');
Route::get('/trip-diary3',[TravellerController::class,'diary4']);
Route::get('/trip-photo',[TravellerController::class,'photo']);
Route::post('/trip-photo-store', [TravellerController::class, 'trip_photo'])->name('trip-photo');
Route::get('/photo-view',[TravellerController::class,'allRecord4'])->name('photo-view');
Route::get('/trip-expence',[TravellerController::class,'expence']);
Route::post('/trip-expence', [TravellerController::class, 'ExpenceStore'])->name('trip-expence');
Route::get('/expence-view',[TravellerController::class,'allRecord5'])->name('expence-view');
require __DIR__.'/auth.php';
