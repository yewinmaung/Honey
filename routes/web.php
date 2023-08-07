<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name("home");

//Admin

Route::get("admin/dashboard",[\App\Http\Controllers\AdminPanelController::class,'index'])->name("dashboard");
Route::get('admin/upload',[\App\Http\Controllers\AdminPanelController::class,'create'])->name('admin-upload');
Route::post('admin/apply',[\App\Http\Controllers\AdminPanelController::class,'store'])->name('admin-apply');
Route::get('admin/user-upload',[\App\Http\Controllers\AdminPanelController::class,'upload'])->name('admin-user-upload');
Route::get('admin/report',[\App\Http\Controllers\AdminPanelController::class,'report'])->name('admin-user-report');

Route::get('admin/staffInformation',[\App\Http\Controllers\AdminPanelController::class,'show'])->name('admin-staff');
Route::get('admin/staffinformation/{id}',[\App\Http\Controllers\AdminPanelController::class,'edit'])->name('staff-detail');
Route::put('admin/staff/update/{id}',[\App\Http\Controllers\AdminPanelController::class,'update'])->name('staff-update');
Route::delete('admin/staffinformation/delete/{id}',[\App\Http\Controllers\AdminPanelController::class,'destroy'])->name('staff-delete');

Route::get("admin/message-detail/{id}",[\App\Http\Controllers\AdminPanelController::class,'reportdetail'])->name('admin-message');

Route::get('admin/bookUser',[\App\Http\Controllers\AdminPanelController::class,'bookingUser'])->name('book-user');
Route::post('admin/search',[\App\Http\Controllers\ChartController::class,'search'])->name('admin-actionsearch');
//EndAdmin
//Authentication
Route::get('homeView',[\App\Http\Controllers\CustonAuthController::class,'homeView'])->name('homeView');
Route::get('login',[\App\Http\Controllers\CustonAuthController::class,'index'])->name('login');
Route::post('cus-login',[\App\Http\Controllers\CustonAuthController::class,'customLogin'])->name('cus-login');
Route::get('registration',[\App\Http\Controllers\CustonAuthController::class,'Registration'])->name('registration');
Route::post('cus-registration',[\App\Http\Controllers\CustonAuthController::class,'cusRegistration'])->name('cus-registration');
Route::get('signout',[\App\Http\Controllers\CustonAuthController::class,'signout'])->name('signout');

//end Authentication
Route::post("user/booking",[\App\Http\Controllers\BookController::class,"store"])->name("user.store");
Route::get("user/booknow",[\App\Http\Controllers\BookController::class,"create"])->name("user.booknow");
Route::get("user/booking/confirm",[\App\Http\Controllers\BookController::class,"show"])->name("user.ticket");
Route::delete("user/booking/cancel/{id}",[\App\Http\Controllers\BookController::class,"destroy"])->name("book.cancel");
Route::get("honey/trip",function (){
    return view('user.bagan');
})->name('bagan');
Route::post("honey/review",[\App\Http\Controllers\MessageController::class,'store'])->name('message.review');



