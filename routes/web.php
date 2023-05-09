<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeServiceController;
use App\Http\Controllers\HomeServicesServicesController;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\SalonServicesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\HomeUser;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\HomeReservationController;
use App\Http\Controllers\UserSalonBookController;
use App\Http\Controllers\SalonUser;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserHomeBook;
use App\Models\HomeServices_Services;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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


// Route::get('/salonat', function () {
//     return view('user.Salonat');
// });
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




Route::get('/book', function () {
    return view('user.SalonBook');
});
Route::get('/bookHomeServices', function () {
    return view('user.HomeBook');
});




// ////////////////////////////// login admin //////////////////////////////


Route::get('/AdminLogin' , function(){
    return view('admin.Login');
});
Route::post('/CheckLogin' , [LoginAdminController::class,'login'])->name('CheckLogin');




// /group admin //////////////////////

Route::middleware(['Admin'])->group(function()
{
Route::get('/account', function () 
{
    return view('admin.account');
});
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
   



// Route::get('/salonServicesCreate', [SalonServicesController::class,'create2']);
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
/////////////////admin dashbopard ( reservation ) ///////////////////////////
Route::resource('/SalonReservation',ReservationController::class);
Route::resource('/HomeServicesReservation',HomeReservationController::class);




/////////////////contact ///////////////////////////


Route::resource('/Contact' , ContactController::class);

});


//////////salon Reservation ///////////////////////////

Route::resource('/UserSalonBook',UserSalonBookController::class);
Route::resource('/UserHomeBook',UserHomeBook::class);
/////////////////login and regester  ///////////////////////////

Route::controller(RegisterController::class)->group(function(){
    Route::get('register', 'create')->name('register');
    Route::post('register', 'store')->name('register');
    Route::get('login', 'index')->name('login');
    Route::post('login', 'login')->name('go.login');
    Route::get('logout', 'destroy')->name('logout');
    Route::post('logout', 'destroy')->name('logout');
});





// User Pages with controller

Route::get('/SalonUser' , [SalonUser::class,'index']);
Route::get('/HomeUser' , [HomeUser::class,'index']);
Route::resource('ProfileUser' , ProfileUserController::class);




/////search controller 

Route::get('/editUserProfile', function () {
    return view('user.editProfile');
});

// Route::post('/Search' , [SearchController::class,'searchSalon']);
// Route::post('/search', [SearchController::class, 'searchSalon'])->name('search');
Route::post('/search', [SearchController::class, 'searchSalon'])->name('search.searchSalon');
Route::post('/searchHome', [SearchController::class, 'searchHome'])->name('search.searchHome');



// discount 
Route::resource('discount' , DiscountController::class);


