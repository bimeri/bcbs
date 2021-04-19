<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
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

Route::post('language/french', function(){
    DB::table('admins')->where('id', auth()->user()->id)->update(['lang' => 'fr' ]);
    DB::table('teachers')->where('id', auth()->user()->id)->update(['lang' => 'fr' ]);
    DB::table('students')->where('id', auth()->user()->id)->update(['lang' => 'fr' ]);
    App::setLocale('fr');
    session()->put('key', 'fr');
$notification = array(
    'message' => 'Your language has been changed to French successfully!',
    'alert-type' => 'success');
    Artisan::call('config:cache');
return redirect()->back()->with($notification);
})->name('language.french');

Route::get('admin_logout', [AuthController::class, 'adminLogout'])->name('admin.logout');
Route::get('student_logout', [AuthController::class, 'studentLogout'])->name('student.logout');
Route::get('teacher_logout', [AuthController::class, 'teacherLogout'])->name('teacher.logout');

Route::post('language/english', function(){
    DB::table('admins')->where('id', auth()->user()->id)->update(['lang' => 'en' ]);
    DB::table('teachers')->where('id', auth()->user()->id)->update(['lang' => 'en' ]);
    DB::table('students')->where('id', auth()->user()->id)->update(['lang' => 'en' ]);
    App::setLocale('en');
    session()->put('key', 'en');
$notification = array(
    'message' => 'Your language has been changed to English successfully!',
    'alert-type' => 'success');
    Artisan::call('config:cache');
return redirect()->back()->with($notification);
})->name('language.english');

Route::post('user_login', [AuthController::class, 'login'])->name('user.login');
Route::group(['middleware' => ['web']], function()
{
    route::get('admin_layout', [AdminController::class, 'adminLayout'])->name('admin.layout');
    route::get('student_layout', [StudentController::class, 'studentLaygout'])->name('student.layout');
    route::get('teacher_layout', [TeacherController::class, 'teacherLaygout'])->name('teacher.layout');
});

Route::prefix('admin')->group(function () {
    route::get('admin_home', [AdminController::class, 'index'])->name('admin.home');
});
