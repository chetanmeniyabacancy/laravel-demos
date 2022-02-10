<?php

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

Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home');
Route::get('/who-we-are', 'PagesController@whoWeAre');
Route::get('/technology-office', 'PagesController@technologyOffice');
Route::get('/partnership', 'PagesController@partnership');
Route::get('/internet-of-things', 'PagesController@internetOfThings');
Route::get('/ui-ux-design', 'PagesController@uiUxDesign');
Route::get('/platform-development', 'PagesController@platformDevelopment');
Route::get('/machine-learning-and-IA', 'PagesController@machineLearningAndIA');
Route::get('/location-based-services', 'PagesController@locationBasedServices');
Route::get('/teams', 'PagesController@teams');
Route::get('/operations', 'PagesController@operations');
Route::get('/devops', 'PagesController@devops');
Route::get('/cloud-development-services', 'PagesController@cloudDevelopmentServices');
Route::get('/cybersecurity', 'PagesController@cybersecurity');
Route::get('/cloud-consulting-services', 'PagesController@cloudConsultingServices');
Route::get('/big-data-analytics', 'PagesController@bigDataAnalytics');
Route::get('/blockchain', 'PagesController@blockchain');
Route::get('/engineering', 'PagesController@engineering');
Route::get('/digital-consulting', 'PagesController@digitalConsulting');
Route::get('/advanced-technology', 'PagesController@advancedTechnology');


