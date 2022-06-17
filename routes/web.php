<?php

use App\Http\Controllers\PaymentPage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\QuestionController;


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


/*
|--------------------------------------------------------------------------
| Home Page
|--------------------------------------------------------------------------
*/
Route::get('/', function(){
    return view('welcome');
});
/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| Students Routes
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| Teacher Routes
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('admin', function () {
    return view('admin.dashboard');
})->middleware('authcheck');
Route::get('admin/profile', function () {
    return view('admin.profile');
});



Route::get('payment', [PaymentPage::class, 'index']);

Route::get('verify-payment/{reference}', [PaymentPage::class, 'verify']);


/*
|--------------------------------------------------------------------------
| Tuts Routes
|--------------------------------------------------------------------------
*/
Route::any('send-sms', [SmsController::class, 'send']);