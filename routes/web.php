<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\SettingController;


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

Route::get('/',[FrontendController::class,'index'])->name('frontend.index');
Route::get('aboutUS',[FrontendController::class,'aboutus'])->name('frontend.about');
Route::get('stata',[FrontendController::class,'stata'])->name('frontend.stata');
Route::get('AppliedStatistics',[FrontendController::class,'appliedStatistics'])
                                                ->name('frontend.appliedStatistics');
Route::get('spss',[FrontendController::class,'spss'])->name('frontend.spss');
Route::get('workshops',[FrontendController::class,'workshops'])
                                            ->name('frontend.workshops');
Route::get('seminar',[FrontendController::class,'seminar'])->name('frontend.seminar');

Route::get('conference',[FrontendController::class,'ConferenceICAS'])
                                            ->name('frontend.Conference.icas');

Route::get('publications',[FrontendController::class,'publications'])
                                            ->name('frontend.publications');
Route::get('payment', [FrontendController::class, 'payment'])
                                            ->name('frontend.payment');

Route::get('events',[FrontendController::class,'events'])->name('frontend.events');

Route::get('books',[FrontendController::class,'books'])->name('frontend.books');

Route::get('contact',[FrontendController::class,'contactUs'])->name('frontend.contactUs');

Auth::routes();


Route::middleware('auth')->group(function () {

    Route::get("settings", [SettingController::class, "index"])->name("setting.index");
    Route::put("settings", [SettingController::class, "update"])->name("setting.update");

});

Route::get('/home', [HomeController::class, 'index'])->name('home');
