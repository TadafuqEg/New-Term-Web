<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\HomeController;
/*
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::post('/login',[AuthController::class,'login'])->name('login');

Route::middleware('auth:sanctum')->group( function () {
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');
    Route::post('/contact-us', [HomeController::class, 'contact_us'])->name('api-contact-us');
    Route::post('/join-us', [HomeController::class, 'join_us'])->name('api-join-us');
    
});
Route::get('/emdad-products', function () {
    return response()->file(public_path('assets/emdad_products.pdf'));
})->name('emdad_products');

Route::get('/company_profile', function () {
    return response()->file(public_path('assets/TERM_Company_Profile_2024.pdf'));
})->name('company_profile');

Route::get('/social_intelligence', function () {
    return response()->file(public_path('assets/TERM_Intelligence_Insights_2024.pdf'));
})->name('social_intelligence');

Route::get('/reputation_management', function () {
    return response()->file(public_path('assets/TERM_Reputation_Rundown_2024.pdf'));
})->name('reputation_management');

Route::get('/company_profile_compact', function () {
    return response()->file(public_path('assets/TERM_Company_Profile_2024__Compact.pdf'));
})->name('company_profile_compact');

Route::get('/executive_summary', function () {
    return response()->file(public_path('assets/TERM_Executive_Summary_2024.pdf'));
})->name('executive_summary');

