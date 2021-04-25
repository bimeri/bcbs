<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

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
Route::get('/login', [AuthController::class, 'welcomePage'])->name('login');

Route::post('admin/french', [AdminController::class, 'adminChangeToFrench'])->name('language.french');
Route::post('admin/english', [AdminController::class, 'adminChangeToEnglish'])->name('language.english');

Route::get('admin_logout', [AuthController::class, 'adminLogout'])->name('admin.logout');
Route::get('student_logout', [AuthController::class, 'studentLogout'])->name('student.logout');
Route::get('teacher_logout', [AuthController::class, 'teacherLogout'])->name('teacher.logout');
Route::post('user_login', [AuthController::class, 'login'])->name('user.login');
Route::group(['middleware' => ['web']], function()
{
    route::get('admin_layout', [AdminController::class, 'adminLayout'])->name('admin.layout');
    route::get('student_layout', [StudentController::class, 'studentLaygout'])->name('student.layout');
    route::get('teacher_layout', [TeacherController::class, 'teacherLaygout'])->name('teacher.layout');
});

Route::group(['prefix' => '/admin', 'middleware' => ['auth:admin']], function(){
    route::get('/home', [AdminController::class, 'index'])->name('admin.home');
});
