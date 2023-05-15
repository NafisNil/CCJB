<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\VisionController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\WhatwedoController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\FrontendController;
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



Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('/about-us', [FrontendController::class, 'about'])->name('about.us');
Route::get('/team-us', [FrontendController::class, 'team'])->name('team.us');
Route::get('/projects', [FrontendController::class, 'projects'])->name('projects.us');
Route::get('/event-us', [FrontendController::class, 'event'])->name('event.us');

Route::get('/projects/{id}', [FrontendController::class, 'projects_id'])->name('projectid.us');
Route::get('/event-us/{id}', [FrontendController::class, 'event_id'])->name('eventid.us');

Route::get('/policy-us', [FrontendController::class, 'policy'])->name('policy.us');
Route::get('/training-us', [FrontendController::class, 'training'])->name('training.us');
Route::get('/publication-us', [FrontendController::class, 'publication'])->name('publication.us');
Route::get('/report-us', [FrontendController::class, 'report'])->name('report.us');
Route::get('/article-us', [FrontendController::class, 'article'])->name('article.us');
Route::get('/partner-us', [FrontendController::class, 'partner'])->name('partner.us');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resources([
        'general' => GeneralController::class,
        'about' => AboutController::class,
        'mission' => MissionController::class,
        'vision' => VisionController::class,
        'activity' => ActivityController::class,
        'team' => TeamController::class,
        'event' => EventController::class,
        'report' => ReportController::class,
        'article' => ArticleController::class,
        'policy' => PolicyController::class,
        'training' => TrainingController::class,
        'publication' => PublicationController::class,
        'whatwedo' => WhatwedoController::class,
        'social' => SocialController::class,
        'partner' => PartnerController::class
    ]);

});
