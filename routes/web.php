<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PetController;

use App\Http\Controllers\AuthManager;

use Illuminate\Support\Facades\Auth;

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

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/add', function () {
    return view('add');
})->name('add');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/slider', function(){
    return view('slider');    
})->name('slider');

Route::get('/addpet', function(){
    return view('add');    
})->name('add');

// Display the form to add a new pet
#Route::get('/pets/add', [PetController::class, 'add'])->name('pets.add');

// Handle the form submission to add a new pet
Route::post('/add',[PetController::class,'addPet']);

Route::post('/signup',[AuthManager::class,'signupPost'])->name('signup.post');

Route::post('/login',[AuthManager::class,'loginPost'])->name('login.post');
