<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\Admin;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashbaordController;

Route::get('/dashboard', [DashbaordController::class,'index'])->middleware('auth')->name('dashboard');

// Amdin Routes
Route::middleware(['auth'])->group(function () {
    Route::resource('admin/cars', Admin\CarController::class);
    Route::resource('admin/rentals', Admin\RentalController::class);
    Route::resource('admin/customers', Admin\CustomerController::class);
});


// Frontend Related Work are here 
Route::get('/', [Frontend\PageController::class, 'home'])->name('home');
// Route::resource('cars', Frontend\CarController::class);
// Route::resource('rentals', Frontend\RentalController::class)->middleware('auth');

// Auth Routes 
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


/* 
<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';












  GET|HEAD        / .............................................................. home › Frontend\PageController@home
  GET|HEAD        admin/cars .................................................. cars.index › Admin\CarController@index
  POST            admin/cars .................................................. cars.store › Admin\CarController@store
  GET|HEAD        admin/cars/create ......................................... cars.create › Admin\CarController@create
  GET|HEAD        admin/cars/{car} .............................................. cars.show › Admin\CarController@show
  PUT|PATCH       admin/cars/{car} .......................................... cars.update › Admin\CarController@update
  DELETE          admin/cars/{car} ........................................ cars.destroy › Admin\CarController@destroy
  GET|HEAD        admin/cars/{car}/edit ......................................... cars.edit › Admin\CarController@edit
  GET|HEAD        admin/customers ................................... customers.index › Admin\CustomerController@index
  POST            admin/customers ................................... customers.store › Admin\CustomerController@store
  GET|HEAD        admin/customers/create .......................... customers.create › Admin\CustomerController@create
  GET|HEAD        admin/customers/{customer} .......................... customers.show › Admin\CustomerController@show
  PUT|PATCH       admin/customers/{customer} ...................... customers.update › Admin\CustomerController@update
  DELETE          admin/customers/{customer} .................... customers.destroy › Admin\CustomerController@destroy
  GET|HEAD        admin/customers/{customer}/edit ..................... customers.edit › Admin\CustomerController@edit
  GET|HEAD        admin/rentals ......................................... rentals.index › Admin\RentalController@index
  POST            admin/rentals ......................................... rentals.store › Admin\RentalController@store
  GET|HEAD        admin/rentals/create ................................ rentals.create › Admin\RentalController@create
  GET|HEAD        admin/rentals/{rental} .................................. rentals.show › Admin\RentalController@show
  PUT|PATCH       admin/rentals/{rental} .............................. rentals.update › Admin\RentalController@update
  DELETE          admin/rentals/{rental} ............................ rentals.destroy › Admin\RentalController@destroy
  GET|HEAD        admin/rentals/{rental}/edit ............................. rentals.edit › Admin\RentalController@edit
  GET|HEAD        dashboard .................................................... dashboard › DashbaordController@index
  GET|HEAD        login ......................................................... login › AuthController@showLoginForm
  POST            login ......................................................................... AuthController@login
  POST            logout .............................................................. logout › AuthController@logout
  GET|HEAD        register ............................................ register › AuthController@showRegistrationForm
  POST            register ................................................................... AuthController@register
  GET|HEAD        storage/{path} ....................................................................... storage.local
  GET|HEAD        up .................................................................................................
  


*/