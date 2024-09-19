<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\AuthController;
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

Route::get('/hoo_talk', [HomeController::class, 'hoo_talk'])->name('hoo_talk');
Route::get('/mass', [HomeController::class, 'mass'])->name('mass');

Route::get('/login', [AuthController::class, 'login_view'])->name('login_view');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/sign_up', [AuthController::class, 'sign_up_view'])->name('sign_up_view');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::get('/markets-cryptocurrency', [HomeController::class, 'markets_cryptocurrency'])->name('markets_cryptocurrency');
Route::get('/markets-banking-insurance', [HomeController::class, 'markets_banking_insurance'])->name('markets_banking_insurance');
Route::get('/markets-education', [HomeController::class, 'markets_education'])->name('markets_education');
Route::get('/markets-airlines', [HomeController::class, 'markets_airlines'])->name('markets_airlines');
Route::get('/markets-mass-retail', [HomeController::class, 'markets_mass_retail'])->name('markets_mass_retail');
Route::get('/markets-telco', [HomeController::class, 'markets_telco'])->name('markets_telco');
Route::get('/markets-oil-gas', [HomeController::class, 'markets_oil_gas'])->name('markets_oil_gas');
Route::get('/markets-theme-amusement-parks', [HomeController::class, 'markets_theme_amusement_parks'])->name('markets_theme_amusement_parks');
Route::get('/markets-FMCG', [HomeController::class, 'markets_FMCG'])->name('markets_FMCG');
Route::get('/markets-luxury', [HomeController::class, 'markets_luxury'])->name('markets_luxury');

Route::get('/industries-ministries-departments', [HomeController::class, 'industries_ministries_departments'])->name('industries_ministries_departments');
Route::get('/industries-fashion', [HomeController::class, 'industries_fashion'])->name('industries_fashion');
Route::get('/emdad-products', function () {
    return response()->file(public_path('assets/emdad_products.pdf'));
})->name('emdad_products');