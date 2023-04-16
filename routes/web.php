<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeServiceController;
use App\Http\Controllers\HomeServicesServicesController;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\SalonServicesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\RegisterController;
use App\Models\HomeServices_Services;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/homepage', function () {
    return view('user.homepage');
});
Route::get('/book', function () {
    return view('user.book');
});
Route::get('/homeService', function () {
    return view('user.homeservices');
});

// Route::get('/Salonat', function () {
//     return view('user.Salonat');
// });

Route::get('/login', function () {
    return view('user.login');
});
Route::get('/regester', function () {
    return view('user.regester');
});
Route::get('/contact', function () {
    return view('user.contact');
});
Route::get('/about', function () {
    return view('user.about');
});
Route::get('/userProfile', function () {
    return view('user.userProfile');
});

Route::get('/editUserProfile', function () {
    return view('user.editProfile');
});


// ////////////////////////////// login admin //////////////////////////////


Route::get('/AdminLogin' , function(){
    return view('admin.Login');
});
Route::post('/CheckLogin' , [LoginAdminController::class,'login'])->name('CheckLogin');




// /group admin //////////////////////

Route::middleware(['Admin'])->group(function(){

    //////////////////admin dashboard ///////////////////////////////
Route::get('/account', function () {
    return view('admin.account');
});

    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
/////////////////admin dashbopard ( user controller) ///////////////////////////
Route::resource('/user',UserController::class);
/////////////////admin dashbopard ( category controller) ///////////////////////////
Route::resource('/category',CategoryController::class);
/////////////////admin dashbopard ( home services) ///////////////////////////
Route::resource('/homeServices',HomeServiceController::class);

/////////////////admin dashbopard ( salon ) ///////////////////////////

Route::resource('/salon',SalonController::class);

/////////////////admin dashbopard ( salon-services ) ///////////////////////////

Route::resource('/salonServices',SalonServicesController::class);

/////////////////admin dashbopard ( salon-services ) ///////////////////////////

Route::resource('/homeServices_Services',HomeServicesServicesController::class);



/////////////////contact ///////////////////////////


Route::resource('/Contact' , ContactController::class);

});

/////////////////login and regester  ///////////////////////////

Route::controller(RegisterController::class)->group(function(){
    Route::get('register', 'create')->name('register');
    Route::post('register', 'store')->name('register');
    Route::get('login', 'index')->name('login');
    Route::post('login', 'login')->name('go.login');
    Route::get('logout', 'destroy')->name('logout');
    Route::post('logout', 'destroy')->name('logout');
});

