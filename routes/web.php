<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authenticationController;

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

Route::get('/', ['App\Http\Controllers\homeController', 'index'])->name('home');

// LOGIN LOGOUT
Route::get('/login', ['App\Http\Controllers\authenticationController', 'index'])->name('login');
Route::post('/login', ['App\Http\Controllers\authenticationController', 'authenticateUser'])->name('authenticateUser');
Route::post('/logout', ['App\Http\Controllers\authenticationController', 'logout'])->name('logout');

// REGISTER
Route::get('/register', ['App\Http\Controllers\authenticationController', 'register'])->name('register');
Route::post('/register', ['App\Http\Controllers\authenticationController', 'addUser'])->name('addUser');

// PROFILE
Route::get('/profile', ['App\Http\Controllers\profileController', 'index'])->name('profile');

// DASHBOARD 
Route::get('/dashboard/home', ['App\Http\Controllers\dashboardController', 'index'])->name('dashboard');
Route::get('/dashboard/users', ['App\Http\Controllers\dashboardController', 'users'])->name('users');

// USERS TABLE
Route::put('/dashboard/users/{id}', ['App\Http\Controllers\dashboardController', 'changeStatus'])->name('changeStatus');

// PACKAGES TABLE 
Route::get('/dashboard/packages', ['App\Http\Controllers\dashboardController', 'packagesTable'])->name('packagesTable');
Route::get('/dashboard/add', ['App\Http\Controllers\dashboardController', 'addPackages'])->name('addPackages');
ROute::post('/dashboard/add', ['App\Http\Controllers\dashboardController', 'newPackages'])->name('newPackages');
Route::get('/dashboard/edit/{package}', ['App\Http\Controllers\dashboardController', 'editPackages'])->name('editPackages');
Route::put('/dashboard/edit/{package}', ['App\Http\Controllers\dashboardController', 'updatePackages'])->name('updatePackages');
Route::delete('/dashboard/packages/{package}', ['App\Http\Controllers\dashboardController', 'delete'])->name('delete');

// ADD MORE IMAGES
Route::get('dashboard/addImages/{package}', ['App\Http\Controllers\dashboardController', 'addImages'])->name('addImages');
Route::post('dashboard/addImages/{package}', ['App\Http\Controllers\dashboardController', 'addingImages'])->name('addingImages');

// DETAIL
Route::get('/detail/{package}', ['App\Http\Controllers\homeController', 'detail'])->name('detail');
Route::delete('/detail/{image}', ['App\Http\Controllers\dashboardController', 'deleteImage'])->name('deleteImage');

// BOKKING
Route::get('/booking/getAll', ['App\Http\Controllers\homeController', 'getAllBooking'])->name('booking.getAll');
Route::get('/booking/{package}', ['App\Http\Controllers\homeController', 'booking'])->name('booking');
Route::post('/booking/{package}', ['App\Http\Controllers\homeController', 'addBooking'])->name('addBooking');

// USER PACKAGES 
Route::get('/packages', ['App\Http\Controllers\packagesController', 'index'])->name('packages');
Route::get('/packages/search', ['App\Http\Controllers\packagesController', 'packages'])->name('search');

// SEARCH
// Route::get('/search', ['App\Http\Controllers\packagesController', 'search'])->name('search');

// ABOUT PAGE
Route::get('/about', ['App\Http\Controllers\aboutController', 'index'])->name('about');

// GALLERY TABLE
Route::get('/dashboard/gallery', ['App\Http\Controllers\galleryController', 'index'])->name('gallery');
Route::get('/dashboard/addGallery', ['App\Http\Controllers\galleryController', 'addGallery'])->name('addGallery');
Route::post('/dashboard/addGallery', ['App\Http\Controllers\galleryController', 'addImage'])->name('addImage');
Route::delete('dashboard/gallery/{gallery}', ['App\Http\Controllers\galleryController', 'deleteGallery'])->name('deleteGallery');