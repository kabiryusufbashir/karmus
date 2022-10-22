<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\PronunciationController;
use App\Http\Controllers\ProverbController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WordController;
use App\Http\Controllers\ContributorController;

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


Route::get('/faqs', function(){
    return view('faqs');
});

Route::get('/contact-us', function(){
    return view('contact');
});

Route::get('/', [ContributorController::class, 'index'])->name('landing-page');
Route::post('/logout', [ContributorController::class, 'logout'])->name('contributor-logout');
// Route::get('/', [SearchController::class, 'index']);

//Create Account Contributors
Route::post('/create-account', [ContributorController::class, 'signUp'])->name('create-account');
Route::post('/sign-in', [ContributorController::class, 'signIn'])->name('sign-in');


Route::get('/all-numbers', [NumberController::class, 'numbers'])->name('numbers');
Route::get('/all-pronunciations', [PronunciationController::class, 'pronunciations'])->name('pronunciation');
Route::get('/hausa-proverb', [ProverbController::class, 'hausaProverb'])->name('proverbs');
Route::post('/contact-us', [SearchController::class, 'contact']);
Route::get('/autocompleteenglish', [SearchController::class, 'autocompleteenglish']);
Route::get('/autocompletehausa', [SearchController::class, 'autocompletehausa']);
Route::get('/getwords/', [SearchController::class, 'getwords']);
Route::post('/search', [SearchController::class, 'store']);
Route::get('/home', [HomeController::class, 'index']);

// WORDS ROUTES
Route::get('/words', function(){
    return view('words');
});

Route::get('/words', [WordController::class, 'index']);
Route::post('/words', [WordController::class, 'store']);
Route::post('/addwordnotfound/{id}', [WordController::class, 'addwordnotfound']);
Route::delete('/deletewordnotfound/{id}', [WordController::class, 'deletewordnotfound']);
Route::post('/search_word', [WordController::class, 'search']);
Route::get('/words/words/edit/{id}', [WordController::class, 'edit']);
Route::patch('/words/words/edit/{id}', [WordController::class, 'update']);
Route::delete('/words/{id}', [WordController::class, 'destroy']);

// NUMBERS ROUTES
Route::get('/numbers', [NumberController::class, 'index']);
Route::post('/numbers', [NumberController::class, 'store']);
Route::get('/numbers/numbers/edit/{id}', [NumberController::class, 'edit']);
Route::patch('/numbers/numbers/edit/{id}', [NumberController::class, 'update']);
Route::delete('/numbers/{id}', [NumberController::class, 'destroy']);
Route::post('/search_number', [NumberController::class, 'search']);

// PROVERBS ROUTES
Route::get('/proverbs', [ProverbController::class, 'index']);
Route::post('/proverbs', [ProverbController::class, 'store']);
Route::get('/proverbs/proverbs/edit/{id}', [ProverbController::class, 'edit']);
Route::patch('/proverbs/proverbs/edit/{id}', [ProverbController::class, 'update']);
Route::delete('/proverbs/{id}', [ProverbController::class, 'destroy']);
Route::post('/search_proverb', [ProverbController::class, 'search']);


// PRONUNCIATION ROUTES
Route::get('/pronunciation', [PronunciationController::class, 'index']);
Route::post('/addpronunciation', [PronunciationController::class, 'store']);
Route::get('/pronunciation/pronunciation/edit/{id}', [PronunciationController::class, 'edit']);
Route::patch('/pronunciation/pronunciation/edit/{id}', [PronunciationController::class, 'update']);
Route::delete('/pronunciation/{id}', [PronunciationController::class, 'destroy']);
Route::post('/search_pronunciation', [PronunciationController::class, 'search']);

// USERS ROUTES
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/users/edit/{id}', [UserController::class, 'edit']);
Route::patch('/users/users/edit/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);
Route::get('/{id}', [SearchController::class, 'show']);
