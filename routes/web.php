<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgetPasswordController;

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

Route::get('/login',[LoginController::class,'login']);
Route::post('/login',[LoginController::class,'store'])->name('login');
Route::get('/logout',[LoginController::class,'logout']);
Route::get('/forget_password',[ForgetPasswordController::class,'Forget_pasword']);
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);


// Route::group(['middleware' => ['auth']], function() {
     Route::get('/index',[IndexController::class,'index'])->name('index');
     Route::get('/student',[StudentController::class,'student']);
     Route::get('/student/addedit',[StudentController::class,'addeditstudent']);
     Route::get('/teacher',[TeacherController::class,'teacher']);
     Route::get('/teacher/addedit',[TeacherController::class,'addeditteacher']);
     Route::get('/attendance',[AttendanceController::class,'attendance']);
     Route::get('/exam',[ExamController::class,'exam']);
     Route::get('/payment',[PaymentController::class,'payment']);
     Route::get('/cours',[CoursController::class,'cours']);

// //////////////

Route::get('/cards_basic',[IndexController::class,'index0'])->name('index0');
Route::get('/extended-ui-perfect-scrollbar',[IndexController::class,'index1']);
Route::get('/extended-ui-text-divider',[IndexController::class,'index2']);
Route::get('/form-layouts-horizontal',[IndexController::class,'index3']);
Route::get('/form-layouts-vertical',[IndexController::class,'index4']);
Route::get('/forms-basic-inputs',[IndexController::class,'index4']);
Route::get('/forms-input-groups',[IndexController::class,'index5']);
Route::get('/icons-boxicons',[IndexController::class,'index6']);
Route::get('/layouts-blank',[IndexController::class,'index7']);
Route::get('/layouts-container',[IndexController::class,'index8']);
Route::get('/layouts-fluid',[IndexController::class,'index9']);
Route::get('/layouts-without-menu',[IndexController::class,'index10']);
Route::get('/layouts-without-navbar',[IndexController::class,'index11']);
Route::get('/pages-account-settings-account',[IndexController::class,'index12'])->name('index12');
Route::get('/pages-account-settings-connections',[IndexController::class,'index13']);
Route::get('/pages-account-settings-notifications',[IndexController::class,'index14']);
Route::get('/pages-misc-error',[IndexController::class,'index15']);
Route::get('/pages-misc-under-maintenance',[IndexController::class,'index16']);
Route::get('/tables-basic',[IndexController::class,'index17']);
Route::get('/ui-accordion',[IndexController::class,'index18']);
Route::get('/ui-alerts',[IndexController::class,'index19']);
Route::get('/ui-badges',[IndexController::class,'index20']);
Route::get('/ui-buttons',[IndexController::class,'index21']);
Route::get('/ui-carousel',[IndexController::class,'index22']);
Route::get('/ui-collapse',[IndexController::class,'index23']);
Route::get('/ui-dropdowns',[IndexController::class,'index24']);
Route::get('/ui-footer',[IndexController::class,'index25']);
Route::get('/ui-list-groups',[IndexController::class,'index26']);
Route::get('/ui-modals',[IndexController::class,'index27']);
Route::get('/ui-navbar',[IndexController::class,'index28']);
Route::get('/ui-offcanvas',[IndexController::class,'index29']);
Route::get('/ui-pagination-breadcrumbs',[IndexController::class,'index30']);
Route::get('/ui-progress',[IndexController::class,'index31']);
Route::get('/ui-spinners',[IndexController::class,'index32']);
Route::get('/ui-tabs-pills',[IndexController::class,'index33']);
Route::get('/ui-toasts',[IndexController::class,'index34']);
Route::get('/ui-tooltips-popovers',[IndexController::class,'index35']);
Route::get('/ui-typography',[IndexController::class,'index36']);
// });




