<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/companies', [CompanyController::class,'index'])->name('companies.index');

Route::get('/companies/create', [CompanyController::class,'create'])->name('companies.create');
Route::post('/companies/store',[CompanyController::class,'store'])->name('companies.store');

Route::get('/companies/edit/{id}', [CompanyController::class,'edit'])->name('companies.edit');
Route::put('/companies/update/{id}', [CompanyController::class,'update'])->name('companies.update');

Route::get('/companies/show/{id}', [CompanyController::class,'show'])->name('companies.show');

Route::get('/companies/destroy/{id}', [CompanyController::class,'destroy'] )->name('companies.destroy');

//  Contacts

 Route::get('/contacts', [ContactController::class,'index']
)->name('contacts.index');

Route::get('/contacts/create', [ContactController::class,'create'])->name('contacts.create');
Route::post('/contacts/store',[ContactController::class,'store'])->name('contacts.store');


Route::get('/contacts/show/{id}', [ContactController::class,'show'])->name('contacts.show');

 Route::get('/contacts/destroy/{id}', [ContactController::class,'destroy']
 )->name('contacts.destroy');

Route::get('/contacts/edit/{id}', [ContactController::class,'edit'])->name('contacts.edit');
Route::put('/contacts/update/{id}', [ContactController::class,'update'])->name('contacts.update');


 


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ========================

// countries route

Route::get('/countries',[CountryController::class,'index'])->name('countries.index');

Route::get('/countries/create',[CountryController::class,'create'])->name('countries.create');
Route::post('/countries/store',[CountryController::class,'store'])->name('countries.store');

Route::get('/countries/destroy/{id}', [CountryController::class,'destroy'])->name('countries.destroy');
Route::get('/countries/show/{id}', [CountryController::class,'show'])->name('countries.show');

Route::get('/countries/edit/{id}', [CountryController::class,'edit'])->name('countries.edit');
Route::put('/countries/update/{id}', [CountryController::class,'update'])->name('countries.update');


Route::get('/sb', function () {
    return view('sb');
});


// user route

Route::get('/users',[UserController::class,'index'])->name('users.index');

Route::get('/users/create',[UserController::class,'create'])->name('users.create');
Route::post('/users/store',[UserController::class,'store'])->name('users.store');

Route::get('/users/edit/{id}', [UserController::class,'edit'])->name('users.edit');
Route::put('/users/update/{id}', [UserController::class,'update'])->name('users.update');

Route::get('/users/show/{id}', [UserController::class,'show'])->name('users.show');
Route::get('/users/destroy/{id}', [UserController::class,'destroy'])->name('users.destroy');





            

