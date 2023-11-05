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
use App\Http\Controllers\TrainingmanController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\WhatwedoController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BloodController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\WedoController;
use App\Http\Controllers\HandbookController;
use App\Http\Controllers\ActivityimgController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookchapterController;
use App\Http\Controllers\PressController;
use App\Http\Controllers\OtherController;
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
Route::get('/team-member-us', [FrontendController::class, 'team_member'])->name('team.member.us');
Route::get('/executive-member-us', [FrontendController::class, 'executive_member'])->name('executive.member.us');
Route::get('/projects', [FrontendController::class, 'projects'])->name('projects.us');
Route::get('/event-us', [FrontendController::class, 'event'])->name('event.us');
Route::get('/faq-all', [FrontendController::class, 'faq'])->name('faq.all');
Route::get('/projects/{id}', [FrontendController::class, 'projects_id'])->name('projectid.us');
Route::get('/event-us/{id}', [FrontendController::class, 'event_id'])->name('eventid.us');

Route::get('/policy-us', [FrontendController::class, 'policy'])->name('policy.us');
Route::get('/training-us', [FrontendController::class, 'training'])->name('training.us');
Route::get('/publication-us', [FrontendController::class, 'publication'])->name('publication.us');
Route::get('/trainingman-us', [FrontendController::class, 'trainingman'])->name('trainingman.us');
Route::get('/report-us', [FrontendController::class, 'report'])->name('report.us');
Route::get('/article-us', [FrontendController::class, 'article'])->name('article.us');
Route::get('/partner-us', [FrontendController::class, 'partner'])->name('partner.us');
Route::get('/handbook-us', [FrontendController::class, 'handbook'])->name('handbook.us');
Route::get('/book-us', [FrontendController::class, 'book'])->name('book.us');
Route::get('/bookchapter-us', [FrontendController::class, 'bookchapter'])->name('bookchapter.us');
Route::get('/press-us', [FrontendController::class, 'press'])->name('press.us');
Route::get('/other-us', [FrontendController::class, 'other'])->name('other.us');
Route::get('/workshop-us', [FrontendController::class, 'workshop'])->name('workshop.us');
Route::get('/seminar-us', [FrontendController::class, 'seminar'])->name('seminar.us');
Route::get('/trainings-us', [FrontendController::class, 'trainings'])->name('trainings.us');
Route::get('/conference-us', [FrontendController::class, 'conference'])->name('conference.us');
Route::get('/others-us', [FrontendController::class, 'others'])->name('others.us');
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
        'trainingman' => TrainingmanController::class,
        'handbook' => HandbookController::class,
        'article' => ArticleController::class,
        'policy' => PolicyController::class,
        'training' => TrainingController::class,
        'publication' => PublicationController::class,
        'whatwedo' => WhatwedoController::class,
        'social' => SocialController::class,
        'partner' => PartnerController::class,
        'blood' => BloodController::class,
         'faq' => FaqController::class,
         'wedo' => WedoController::class,
         'activityimg' => ActivityimgController::class,
         'book' => BookController::class,
         'bookchapter' => BookchapterController::class,
         'press' => PressController::class,
         'other' => OtherController::class
    ]);

});
