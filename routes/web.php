<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
<<<<<<< HEAD
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailController;
=======
use App\Http\Controllers\IndustryController;
>>>>>>> 9f26ec6d1dc0ee55bbc726d337b7538f09fedfb2

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

#---------------------------  ------------------------------#   
Route::get('customer-list', [CustomerController::class, 'index']);
Route::post('add-update-customer', [CustomerController::class, 'store']);
Route::post('edit-customer', [CustomerController::class, 'edit']);
Route::post('delete-customer', [CustomerController::class, 'destroy']);
#---------------------------  ------------------------------#   

Route::get('industry-list', [IndustryController::class, 'index']);
Route::post('add-update-industry', [IndustryController::class, 'store']);
Route::post('edit-industry', [IndustryController::class, 'edit']);
Route::post('delete-industry', [IndustryController::class, 'destroy']);

//Access Management
Route::get('registration', [AuthController::class, 'registration']);//->name('register-user')
Route::post('user-registration', [AuthController::class, 'userRegistration'])->name('register.user'); 
Route::get('login', [AuthController::class, 'login']); //->name('login');
Route::post('user-login', [AuthController::class, 'userLogin'])->name('login.user');
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('user-profile', [AuthController::class, 'userProfile']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('access-list', [AuthController::class, 'accessList']);
Route::match(['get','post'],'access/edit/{id}',[AuthController::class,'editRegistration'])->name('edit.registration');//edit question

//Sending Email
Route::get('/send-email/{id}', [MailController::class, 'sendEmail'])->name('email.send');



