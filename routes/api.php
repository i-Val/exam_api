<?php

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\QuestionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/loggout', [AuthController::class, 'loggout']);
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/subject/create', [SubjectController::class, 'store']);
Route::post('/question/create', [QuestionController::class, 'store']);
Route::get('/question/show', [QuestionController::class, 'show']);
Route::post('/choice/create', [ChoiceController::class, 'store']);


Route::get('mail', function(){
    $teacher = User::where('id_number', 24)->get();
    $teacher->notify(new \App\Notifications\InvoicePaid());
});

