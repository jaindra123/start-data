<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\IndustryController;

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionTypeController;


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

//Customer 
Route::get('customer-list', [CustomerController::class, 'index']);
Route::post('add-update-customer', [CustomerController::class, 'store']);
Route::post('edit-customer', [CustomerController::class, 'edit']);
Route::post('delete-customer', [CustomerController::class, 'destroy']);
Route::get('customer/login', [CustomerController::class, 'CustomerLoginForm']);
Route::post('customer-login', [CustomerController::class, 'CustomerLogin'])->name('login.customer');
Route::get('customer-logout', [CustomerController::class, 'customer-logout'])->name('customer-logout');

//Industry 
Route::get('industry-list', [IndustryController::class, 'index']);
Route::post('add-update-industry', [IndustryController::class, 'store']);
Route::post('edit-industry', [IndustryController::class, 'edit']);
Route::post('delete-industry', [IndustryController::class, 'destroy']);
 
//Question-Type 
Route::get('question-type-list', [QuestionTypeController::class, 'index']);
Route::post('add-update-question-type', [QuestionTypeController::class, 'store']);
Route::post('edit-question-type', [QuestionTypeController::class, 'edit']);
Route::post('delete-question-type', [QuestionTypeController::class, 'destroy']);

//Multiple-Choice Question
Route::get('question-type', [QuestionController::class, 'index']);
Route::get('single-choice-question', [QuestionController::class, 'create']);
Route::get('all-questions', [QuestionController::class, 'AllQuestionList']);
Route::post('save-question',[QuestionController::class,'store'])->name('question.save');
Route::get('survey/{id}', [QuestionController::class, 'survey']);
Route::post('survey-submit', [QuestionController::class, 'surveyPost'])->name('survey.save');
Route::post('add-more-answer', [QuestionController::class, 'AddMoreAns']);

//Access Management
Route::get('registration', [AuthController::class, 'registration']);//->name('register-user')
Route::post('user-registration', [AuthController::class, 'userRegistration'])->name('register.user'); 
Route::get('login', [AuthController::class, 'login']); //->name('login');
Route::post('user-login', [AuthController::class, 'userLogin'])->name('login.user');
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('user-profile', [AuthController::class, 'userProfile']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('access-list', [AuthController::class, 'accessList']);
Route::get('delete-customer/{id}', [AuthController::class, 'delecteCustomer'])->name('delete.cutomer');
Route::match(['get','post'],'access/edit/{id}',[AuthController::class,'editRegistration'])->name('edit.registration');//edit registration

//Sending Email
Route::get('/send-email/{id}', [MailController::class, 'sendEmail'])->name('email.send');

Route::get('/forget-email', [MailController::class, 'forgetEmail'])->name('mail.forget');

Route::view('questionair','backend.questionair-tool');
Route::view('admin-dashboard','backend.admin-dashboard');
Route::view('dashbord','backend.dashbord');
Route::view('analysis-platform-dashboard','backend.analysis-platform-dashboard');


//Questionairs 
Route::get('add-questionairs',[QuestionairController::class,'add_questionairs'])->name('add-questionairs');
Route::post('store-questionairs',[QuestionairController::class,'store_questionairs'])->name('store-questionairs');

