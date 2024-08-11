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
Route::get("/",[\App\Http\Controllers\BookController::class,"index"])->name("home");

//Route::get('/', function () {
//    return view('welcome');
//})->name("home");

//Admin
Route::get('admin',[\App\Http\Controllers\AdminPanelController::class,'forAdminformat'])->name('adminmaster');
Route::get("admin/dashboard",[\App\Http\Controllers\AdminPanelController::class,'index'])->name("dashboard");
Route::get('admin/upload',[\App\Http\Controllers\AdminPanelController::class,'create'])->name('admin-upload');
Route::post('admin/apply',[\App\Http\Controllers\AdminPanelController::class,'store'])->name('admin-apply');
Route::get('admin/MBooking',[\App\Http\Controllers\AdminPanelController::class,'upload'])->name('abook');
Route::get('admin/report',[\App\Http\Controllers\AdminPanelController::class,'report'])->name('admin-user-report');
Route::get('admin/staffaccount',[\App\Http\Controllers\AdminPanelController::class,'staffAccount'])->name('staff-account');
Route::post("admin/reply",[\App\Http\Controllers\MessageController::class,'reply'])->name("reply");
Route::get("admin/staffaccount/{id}",[\App\Http\Controllers\AdminPanelController::class,"staffAccEdit"])->name('staffaccedit');
Route::post("admin/staffaccount-update",[\App\Http\Controllers\AdminPanelController::class,'staffupdate'])->name('staffacc-update');
Route::delete("admin/staffaccount/{id}",[\App\Http\Controllers\AdminPanelController::class,"staffAccDelete"])->name("staffaccdelete");

Route::get('admin/staffinformation/{id}',[\App\Http\Controllers\AdminPanelController::class,'edit'])->name('staff-detail');


Route::put('admin/staff/update/{id}',[\App\Http\Controllers\AdminPanelController::class,'update'])->name('staff-update');
Route::delete('admin/staffinformation/delete/{id}',[\App\Http\Controllers\AdminPanelController::class,'destroy'])->name('staff-delete');

Route::get("admin/message/{id}",[\App\Http\Controllers\AdminPanelController::class,'reportdetail'])->name('admin-message');
Route::post('admin/adminbook',[\App\Http\Controllers\AdminPanelController::class,'adminbooking'])->name('admin-book');
Route::get('admin/bookUser',[\App\Http\Controllers\AdminPanelController::class,'bookingUser'])->name('book-user');//
Route::post('admin/search',[\App\Http\Controllers\SearchController::class,'search'])->name('admin-actionsearch');
Route::post('admin/staff/search',[\App\Http\Controllers\SearchController::class,'staffsearch'])->name('staff-search');
Route::post('admin/staffacc/search',[\App\Http\Controllers\SearchController::class,'staffaccsearch'])->name('staffacc-search');
Route::get('admin/done/{id}',[\App\Http\Controllers\PaymentController::class,'edit'])->name('done');
Route::put('admin/done/{id}',[\App\Http\Controllers\PaymentController::class,'update'])->name('book-done');
Route::get("admin/profile",[\App\Http\Controllers\AdminPanelController::class,"adminProfile"])->name("adminprofile");
Route::post("admin/profile",[\App\Http\Controllers\AdminPanelController::class,"adminProfileProcess"])->name("aprofile");
Route::post("admin/hotel",[\App\Http\Controllers\TownController::class,"store"])->name("hotel");
Route::get("admin/hotellist",[\App\Http\Controllers\TownController::class,'show'])->name("hotelshow");
Route::delete("admin/hoteldel/{id}",[\App\Http\Controllers\TownController::class,"destroy"])->name("hdelete");
Route::get("admin/hoteledit/{id}",[\App\Http\Controllers\TownController::class,"edit"])->name("hoteledit");
Route::post("admin/hotelupdate",[\App\Http\Controllers\TownController::class,"update"])->name("hupdate");
Route::get("admin/gust",[\App\Http\Controllers\TownController::class,"gust"])->name("gust");
Route::post("admin/gust",[\App\Http\Controllers\TownController::class,"gustInfo"])->name("gustInfo");
Route::delete("admin/gust/{id}",[\App\Http\Controllers\TownController::class,'hotdel'])->name("hot");
Route::get("admin/room",[\App\Http\Controllers\TownController::class,"gustroom"])->name("gust-room");
Route::post("admin/room",[\App\Http\Controllers\TownController::class,"room"])->name("room");
Route::delete("admin/roomdel/{id}",[\App\Http\Controllers\TownController::class,"rdel"])->name("rdel");
Route::delete("admin/pdel/{id}",[\App\Http\Controllers\PackageController::class,"pdel"])->name("pdel");
Route::get("admin/restaurant",[\App\Http\Controllers\RestaurantController::class,"index"])->name("restau");
Route::post("admin/restaurant",[\App\Http\Controllers\RestaurantController::class,"store"])->name("urestau");
Route::get("admin/edit/restraurant/{id}",[\App\Http\Controllers\RestaurantController::class,"edit"])->name("erestau");
Route::post("admin/update/restaurant",[\App\Http\Controllers\RestaurantController::class,"update"])->name("urest");
Route::delete("admin/delete/restaurant/{id}",[\App\Http\Controllers\RestaurantController::class,'destroy'])->name("rdel");
//EndAdmin
//Authentication
Route::get('homeView',[\App\Http\Controllers\CustonAuthController::class,'homeView'])->name('homeView');
Route::get('login',[\App\Http\Controllers\CustonAuthController::class,'index'])->name('login');
Route::post('cus-login',[\App\Http\Controllers\CustonAuthController::class,'customLogin'])->name('cus-login');
Route::get('registration',[\App\Http\Controllers\CustonAuthController::class,'Registration'])->name('registration');
Route::post('cus-registration',[\App\Http\Controllers\CustonAuthController::class,'cusRegistration'])->name('cus-registration');
Route::get('signout',[\App\Http\Controllers\CustonAuthController::class,'signout'])->name('signout');

Route::get('admin/login',[\App\Http\Controllers\AdminAuthController::class,"index"])->name("admin-login");
Route::post('admin/cus/login',[\App\Http\Controllers\AdminAuthController::class,'customLogin'])->name("admin-cuslogin");
Route::get('admin/packages',[\App\Http\Controllers\PackageController::class,'index'])->name('staff-reg');
Route::post('admin/packages',[\App\Http\Controllers\PackageController::class,"store"])->name('package');
Route::get("admin/packagelist",[\App\Http\Controllers\PackageController::class,'show'])->name("plist");
Route::get("admin/package/{id}",[\App\Http\Controllers\PackageController::class,"edit"])->name("pacedit");
Route::post("admin/Updatepackage",[\App\Http\Controllers\PackageController::class,"update"])->name("upackage");
Route::get("admin/hotelinfo",[\App\Http\Controllers\TownController::class,"index"])->name("addtown");
Route::post("admin/blog",[\App\Http\Controllers\BookController::class,"blog"])->name("blog");
Route::delete("admin/postdel/{id}",[\App\Http\Controllers\BookController::class,"postdelete"])->name("postdel");
Route::get("admin/postedit/{id}",[\App\Http\Controllers\BookController::class,"pedit"])->name("pedit");
Route::post("adim/postupdate",[\App\Http\Controllers\BookController::class,"pupdate"])->name("pupdate");
Route::get('admin/signout',[\App\Http\Controllers\AdminAuthController::class,'signout'])->name('admin-logout');

//end Authentication

Route::get("user/pagoda/detail/{id}",[\App\Http\Controllers\PagodaController::class,"show"])->name("pagodadetail");
Route::post("user/booking",[\App\Http\Controllers\BookController::class,"store"])->name("user.store");
Route::get("user/booknow/{id}",[\App\Http\Controllers\BookController::class,"create"])->name("user.booknow");
Route::get("user/booking/confirm",[\App\Http\Controllers\BookController::class,"show"])->name("user.ticket");
Route::delete("user/booking/cancel/{id}",[\App\Http\Controllers\BookController::class,"destroy"])->name("book.cancel");
Route::get("honey/trip",[\App\Http\Controllers\BookController::class,"trip"])->name('trip-package');
Route::post("user/review",[\App\Http\Controllers\MessageController::class,'store'])->name('message.review');
Route::get("user/spackage",[\App\Http\Controllers\BookController::class,"edit"])->name("spackage");
///////////////
Route::get('forget-password', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
