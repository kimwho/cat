<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\Auth\LoginController;





// Route to display a list of doctors
Route::get('/', [DoctorController::class, 'getAllDoctors'])->name('doctors.getalldoctor');


// Login/Register ..

Route::get('/login', [LoginController::class,'show_login_form'])->name('login');
Route::post('/login', [LoginController::class,'process_login'])->name('login');
Route::get('/register', [LoginController::class,'show_signup_form'])->name('register');
Route::post('/register', [LoginController::class,'process_signup']);
Route::post('/logout', [LoginController::class,'logout'])->name('logout');

// end Login/Register ..


    
// Protected group by middleware -----
Route::group(["middleware" => ["auth"]], function(){
   
    Route::get('/bookingdetail/{id}',[DoctorController::class,'bookingdetail']);

    Route::get('/my-appointments', [DoctorController::class, 'myAppointments'])->name('my_appointments');
    
    Route::post('/appointments/store', [DoctorController::class, 'storeAppointment'])->name('appointments.store');

});
