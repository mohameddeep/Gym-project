<?php


use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\CourseController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PricingController;
use App\Http\Controllers\Front\TrainerController ;
use Illuminate\Support\Facades\Route;




// Route::get('/', function () {
//     return view('front.pages.index');
// });

Route::resource('/', HomeController::class)->only('index');



Route::middleware('auth:web')->group(function () {

Route::resource('home', HomeController::class);
Route::resource('about', AboutController::class);
Route::resource('trainer', TrainerController::class);
Route::resource('class', CourseController::class);
Route::resource('offer', PricingController::class);
Route::resource('contact', ContactController::class);

});


// Route::get('/about', function () {
//     return view('front.pages.about');
// });
// Route::get('/blog', function () {
//     return view('front.pages.blog');
// });
// Route::get('/single_blog', function () {
//     return view('front.pages.single_blog');
// });
// Route::get('/single_class', function () {
//     return view('front.pages.single_class');
// });
// Route::get('/classes', function () {
//     return view('front.pages.classes');
// });
// Route::get('/contact', function () {
//     return view('front.pages.contact');
// });
// Route::get('/pricing', function () {
//     return view('front.pages.pricing');
// });
// Route::get('/trainers', function () {
//     return view('front.pages.trainers');
// });
