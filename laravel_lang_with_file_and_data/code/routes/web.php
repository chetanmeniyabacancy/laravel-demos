<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LanguageTranslationController;


/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/home', [PagesController::class, 'home']);
Route::get('/', [PagesController::class, 'home']);
Route::get('/who-we-are', [PagesController::class, 'whoWeAre']);
Route::get('/technology-office', [PagesController::class, 'technologyOffice']);
Route::get('/partnership', [PagesController::class, 'partnership']);
Route::get('/internet-of-things', [PagesController::class, 'internetOfThings']);
Route::get('/ui-ux-design', [PagesController::class, 'uiUxDesign']);
Route::get('/platform-development', [PagesController::class, 'platformDevelopment']);
Route::get('/machine-learning-and-IA', [PagesController::class, 'machineLearningAndIA']);
Route::get('/location-based-services', [PagesController::class, 'locationBasedServices']);
Route::get('/teams', [PagesController::class, 'teams']);
Route::get('/operations', [PagesController::class, 'operations']);
Route::get('/devops', [PagesController::class, 'devops']);
Route::get('/cloud-development-services', [PagesController::class, 'cloudDevelopmentServices']);
Route::get('/cybersecurity', [PagesController::class, 'cybersecurity']);
Route::get('/cloud-consulting-services', [PagesController::class, 'cloudConsultingServices']);
Route::get('/big-data-analytics', [PagesController::class, 'bigDataAnalytics']);
Route::get('/blockchain', [PagesController::class, 'blockchain']);
Route::get('/engineering', [PagesController::class, 'engineering']);
Route::get('/digital-consulting', [PagesController::class, 'digitalConsulting']);
Route::get('/advanced-technology', [PagesController::class, 'advancedTechnology']);
Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch');;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['middleware' => ['admin.user']], function () {

    Route::group(config('translation.route_group_config'), function ($router) {
        $router->get(config('translation.ui_url'), [LanguageController::class, 'index'])
                ->name('languages.index');

        $router->get(config('translation.ui_url') . '/create', [LanguageController::class, 'create'])
                ->name('languages.create');

        $router->post(config('translation.ui_url'), [LanguageController::class, 'store'])
                ->name('languages.store');

        $router->get(config('translation.ui_url') . '/{language}/translations', [LanguageTranslationController::class, 'index'])
                ->name('languages.translations.index');

        $router->post(config('translation.ui_url') . '/{language}', [LanguageTranslationController::class, 'update'])
                ->name('languages.translations.update');

        $router->get(config('translation.ui_url') . '/{language}/translations/create', [LanguageTranslationController::class, 'create'])
                ->name('languages.translations.create');

        $router->post(config('translation.ui_url') . '/{language}/translations', [LanguageTranslationController::class, 'store'])
                ->name('languages.translations.store');
    });
});
