<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AnnouncementController;
use App\Http\Controllers\Admin\ConferenceCategoryController;
use App\Http\Controllers\Admin\ConferenceController;
use App\Http\Controllers\Admin\EventController as EventControllers;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PublicationController;
use App\Http\Controllers\Admin\SeminarController;
use App\Http\Controllers\Admin\TrainingCategoryController;
use App\Http\Controllers\Admin\TrainingController;
use App\Http\Controllers\Admin\WorkshopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;


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
Route::get('Training/{name}', [FrontendController::class, 'frontendTrainingCategory'])
                                        ->name('frontendTrainingCategory');

//Route::get('stata',[FrontendController::class,'stata'])->name('frontend.stata');
//Route::get('AppliedStatistics',[FrontendController::class,'appliedStatistics'])
//                                                ->name('frontend.appliedStatistics');
Route::get('spss',[FrontendController::class,'spss'])->name('frontend.spss');
Route::get('workshops',[FrontendController::class,'workshops'])
                                            ->name('frontend.workshop');
Route::get('seminars',[FrontendController::class,'seminar'])->name('frontendSeminar');

Route::get('conferenceUs/{name}',[FrontendController::class,'ConferenceICAS'])
                                            ->name('frontendConferenceUS');

Route::get('publications',[FrontendController::class,'publications'])
                                            ->name('frontendPublications');
Route::get('payment', [FrontendController::class, 'payment'])
                                            ->name('frontend.payment');

Route::get('event',[FrontendController::class,'events'])->name('frontend.events');

Route::get('books',[FrontendController::class,'books'])->name('frontend.books');

Route::get('contact',[FrontendController::class,'contactUs'])->name('frontend.contactUs');

Auth::routes();


Route::middleware('auth')->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::resource("sliders", SliderController::class);

    Route::resource('abouts',AboutController::class);

    Route::resource('workshop',WorkshopController::class);

    Route::resource('seminar',SeminarController::class);

    Route::resource('publication',PublicationController::class);

    Route::resource('conference-categories',ConferenceCategoryController::class);
    Route::resource('conference',ConferenceController::class);

    Route::resource('training-categories',TrainingCategoryController::class);
    Route::resource('training',TrainingController::class);

    Route::resource('events', EventControllers::class);
    Route::resource('announcements',AnnouncementController::class);

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile/update', [ProfileController::class, 'profileUpdate'])->name('profile.update');



    Route::get("settings", [SettingController::class, "index"])->name("setting.index");
    Route::put("settings", [SettingController::class, "update"])->name("setting.update");

});


