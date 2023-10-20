<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PricingController;
use App\Http\Controllers\Admin\TrainerController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;



// Route::get('/admin_dashboard', function () {
//     return view('admin.layout.app');
// })->name('dashboard');//->middleware('auth:admin');


Route::middleware('auth:admin')->group(function () {

    Route::resource('home', HomeController::class)->only('index');
    Route::resource('dashbord_user', UserController::class);
    //Route::resource('dashbord_trainer', TrainerController::class);
    Route::resource('dashbord_admin', AdminController::class);

    Route::resource('dashbord_class', CourseController::class);
    Route::resource('dashbord_offer', PricingController::class);
    Route::resource('dashbord_order', BookingController::class);
    Route::resource('dashbord_partner', PartnerController::class);
    Route::resource('dashbord_gallery', GalleryController::class);
    Route::resource('dashbord_contact', ContactController::class);
    Route::resource('dashbord_event', EventController::class);


});
// Route::resource('dashbord_user', UserController::class);
// Route::resource('dashbord_trainer', TrainerController::class);
// Route::resource('dashbord_admin', AdminController::class);

// Route::resource('dashbord_class', CourseController::class);
// Route::resource('dashbord_offer', PricingController::class);
// Route::resource('dashbord_order', BookingController::class);
// Route::resource('dashbord_partner', PartnerController::class);
// Route::resource('dashbord_gallery', GalleryController::class);
// Route::resource('dashbord_contact', ContactController::class);
// Route::resource('dashbord_event', EventController::class);
Route::resource('dashbord_trainer', TrainerController::class);
