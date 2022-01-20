<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IndustryController;

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

