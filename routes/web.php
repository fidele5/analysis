<?php

use App\Http\Controllers\AssertionController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\OpinionController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\ReponseController;
use App\Http\Controllers\RubriqueController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view("auth.login");
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::resource('questionnaire', QuestionnaireController::class);
    Route::resource('question', QuestionController::class);
    Route::resource('assertion', AssertionController::class);
    Route::resource('reponse', ReponseController::class);
    Route::resource('promotion', PromotionController::class);
    Route::resource('filiere', FiliereController::class);
    Route::resource('opinion', OpinionController::class);
    Route::resource('rubrique', RubriqueController::class);
    Route::get('questions', [QuestionnaireController::class, 'questions']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
