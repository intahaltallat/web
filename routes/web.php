<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\login;



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

Route::get('/delete_user', function () {
    return view('delete_user');
})->name('delete_user');

Route::get('/deletepet', function(){
    return view('deletepet');    
})->name('deletepet');

Route::get('/update_Pet', function(){
    return view('update_Pet');    
})->name('update_Pet');

Route::get('/update_user', function(){
    return view('update_user');    
})->name('update_user');

//Route::any('/updateP', function(){
 //   return view('update_Pet_Form');    
//})->name('update_Pet_Form');


Route::get('/register_admin', function () {
    return view('register_admin');
})->name('register_admin');

Route::get('/searchpet', function () {
    return view('searchpet');
})->name('searchpet');


Route::get('/login_admin', function () {
    return view('login_admin');
})->name('login_admin');

// Route::get('/index', function () {
//     return view('index');
// })->name('index');

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

Route::post('/signup_admin',[AuthManager::class,'signupPost_admin'])->name('signup_admin.post');


Route::post('/loginsession','App\Http\Controllers\login@loginsession');

// Route::get('/', function () {
//     return view('index');
// })->name('index');

Route::post('/logout', 'App\Http\Controllers\login@logoutUser')->name('logout')->middleware('web');

// Route::any('/buyPet', 'App\Http\Controllers\PetController@buyPet')->name('buyPet')->middleware('web');

Route::get('/yourPets',[PetController::class,'yourPets'])->name('yourPets');

Route::get('/showAllPets',[PetController::class,'showAllPets'])->name('showAllPets');
Route::get('/index',[PetController::class,'index'])->name('index');

Route::get('/buyPet',[PetController::class,'buyPet'])->name('buyPet');

Route::any('/admin_index', function(){
    return view('admin_index');    
})->name('admin_index');

Route::any('/loginsession_admin','App\Http\Controllers\AdminController@loginsession_admin');

Route::any('/deleteP','App\Http\Controllers\AdminController@delete_pet');

 Route::any('/updatePF','App\Http\Controllers\AdminController@update_pet_new')->name('update_form_new');


 Route::post('/updateP', 'App\Http\Controllers\AdminController@update_form')->name('update_form');

 Route::post('/updateU', 'App\Http\Controllers\AdminController@update_user')->name('update_user');

 Route::post('/updateUser', 'App\Http\Controllers\AdminController@update_user_form')->name('update_user_form');


Route::any('/delete','App\Http\Controllers\AdminController@delete_user');

Route::get('/search/{term}', [PetController::class,'searchPet'] );