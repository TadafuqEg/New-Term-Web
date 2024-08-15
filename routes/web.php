<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about_us', [HomeController::class, 'about_us'])->name('about_us');
Route::get('/success_stories', [HomeController::class, 'success_stories'])->name('success_stories');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/reputation', [HomeController::class, 'reputation'])->name('reputation');
Route::get('/competitive', [HomeController::class, 'competitive'])->name('competitive');
Route::get('/marketing', [HomeController::class, 'marketing'])->name('marketing');
Route::get('/risk', [HomeController::class, 'risk'])->name('risk');
Route::get('/influencer', [HomeController::class, 'influencer'])->name('influencer');
Route::get('/authenticity', [HomeController::class, 'authenticity'])->name('authenticity');
Route::get('/amplification', [HomeController::class, 'amplification'])->name('amplification');
Route::get('/reputation-mange', [HomeController::class, 'reputation_mange'])->name('reputation_mange');
Route::get('/tactical', [HomeController::class, 'tactical'])->name('tactical');
Route::get('/influnce-marketing', [HomeController::class, 'influnce_marketing'])->name('influnce_marketing');
Route::get('/large-scale', [HomeController::class, 'large_scale'])->name('large_scale');
Route::post('/contact-us', [HomeController::class, 'contact_us'])->name('website-contact-us');
Route::post('/join-us', [HomeController::class, 'join_us'])->name('website-join-us');