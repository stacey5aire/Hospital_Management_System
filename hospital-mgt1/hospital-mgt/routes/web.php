<?php

use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AddDoctorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ConsultController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\PatientsController;


Route::post('/login', [LoginController::class, 'verify_login'])->name('login.verify');
Route::get('/', [LandingController::class, 'landing']);
Route::post('/login', [LoginController::class, 'verify_login'])->name('login.verify');
Route::post('/login/verification', [LoginController::class, 'verify_login'])->name('login.verification');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get(
        '/admin/dashboard',
        [DashBoardController::class, 'index']
    )->name('admin.dashboard');

    Route::get('/user/home', [HomeController::class, 'home'])->name('user.home');


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/logoutuser', [LoginController::class, 'logout'])->name('logoutuser');

    //USER Routes

    Route::get('/about', [AboutController::class, 'about'])->name('about');
    Route::get('/doctor', [DoctorController::class, 'doctor'])->name('doctor');
    Route::get('/news', [NewsController::class, 'news'])->name('news');
    Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
    Route::get('/appointment', [AppointmentsController::class, 'appointments'])->name('appointments');
    Route::get('/consult', [ConsultController::class, 'consult'])->name('consult');
    Route::post('user/logout', [LoginController::class, 'logout'])->name('user.logout');
    Route::get('/about', [AboutController::class, 'about'])->name('about');
    Route::post('/appointment', [HomeController::class, 'appointment'])->name('appointment');
    Route::get('/about', [AboutController::class, 'about'])->name('about');
    Route::get('/doctor', [DoctorController::class, 'doctor'])->name('doctor');
    Route::get('/news', [NewsController::class, 'news'])->name('news');
    Route::get('/myappointments', [AppointmentsController::class, 'appointments'])->name('myappointments');
    Route::get('/consult', [ConsultController::class, 'consult'])->name('consult');
    Route::get('/cancel_appoint/{id}', [AppointmentsController::class, 'cancel_appoint'])->name('cancel_appoint');
    Route::post('/get_in_touch', [ContactController::class, 'get_in_touch'])->name('get_in_touch');
    Route::post('/make_consultation', [ConsultController::class, 'make_consultation'])->name('make_consultation');



    //ADMIN Routes.
    Route::get('/admin/doctor', [DoctorController::class, 'doctorList'])->name('admin.doctor');

    //doctor
    Route::get('/admin/add', [AddDoctorController::class, 'index'])->name('admin.add.doctor');
    Route::get('/admin/edit/{id}', [AddDoctorController::class, 'edit'])->name('admin.edit.doctor');
    Route::post('admin/add/doctor', [AddDoctorController::class, 'addNewDoctor'])->name('admin.add.new.doctor');
    Route::post('admin/edit/doctor', [AddDoctorController::class, 'editDoctor'])->name('admin.edit.doctor.record');

    Route::get('/admin/details/', [DoctorController::class, 'doctorDetails'])->name('admin.edit.doctor');
    Route::post('/admin/save/edit', [DoctorController::class, 'store'])->name('admin.save.edit');


    Route::get('/admin/delete/{id}', [AddDoctorController::class, 'delete'])->name('admin.delete.doctor');
    Route::get('/admin/pharmaceutical', [PharmacyController::class, 'index'])->name('admin.pharmaceutical');
    Route::post('/admin/pharmacy/purchase', [PharmacyController::class, 'makePurchase'])->name('admin.pharmacy.purchase');
    Route::get('/admin/cancel', [AppointmentsController::class, 'adminCancelAppointment'])->name('admin.cancel.appointment');
    Route::get('/admin/delete', [AppointmentsController::class, 'adminDeleteAppointment'])->name('admin.delete.appointment');
    Route::get('/admin/mark/complete', [AppointmentsController::class, 'adminMarkCompleteAppointment'])->name('admin.mark.completed.appointment');

    Route::get('/admin/patients', [PatientsController::class, 'index'])->name('admin.patients');

    Route::get('/admin/lab', [LabController::class, 'index'])->name('admin.lab.order');
    Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');
});
