<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\LoginDashboardController;
use App\Http\Controllers\admin\DoctorController;
use App\Http\Controllers\admin\PatientController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\AppointmentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [App\Http\Controllers\admin\LoginDashboardController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [App\Http\Controllers\admin\LoginDashboardController::class, 'login'])->name('admin.login'); 

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\admin\LoginDashboardController::class, 'showDashboard'])->name('admin.pages.dashboard');
});
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/welcome/user', [App\Http\Controllers\admin\LoginDashboardController::class, 'index'])->name('user.Welcome');
});

//Docotor
Route::get('/admin/dashboard/doctor', [App\Http\Controllers\admin\DoctorController::class, 'viewForm'])->name('admin.pages.view.doctor');
Route::get('/admin/dashboard/doctor/add', [App\Http\Controllers\admin\DoctorController::class, 'showAddForm'])->name('admin.pages.doctor.add.form');
Route::post('/admin/dashboard/doctor/add', [App\Http\Controllers\admin\DoctorController::class, 'addDoctor'])->name('admin.pages.add.doctor');
Route::get('/admin/dashboard/edit-doctor/{id}', [App\Http\Controllers\admin\DoctorController::class, 'editDoctor'])->name('admin.pages.edit.doctor');
Route::put('/admin/dashboard/update-doctor/{id}', [App\Http\Controllers\admin\DoctorController::class, 'updateDoctor'])->name('admin.pages.update.doctor');
Route::get('/admin/dashboard/delete-doctor/{id}', [App\Http\Controllers\admin\DoctorController::class, 'deleteDoctor'])->name('admin.pages.delete.doctor');
 

//Patient
Route::get('/admin/dashboard/patient', [App\Http\Controllers\admin\PatientController::class, 'showForm'])->name('admin.pages.view.patient');
Route::get('/admin/dashboard/add-patient', [App\Http\Controllers\admin\PatientController::class, 'addPatient'])->name('admin.pages.add.patient');
Route::get('/admin/dashboard/edit-patient', [App\Http\Controllers\admin\PatientController::class, 'editPatient'])->name('admin.pages.edit.patient');
//update and delete is remaining

//Product
Route::get('/admin/dashboard/view-product', [App\Http\Controllers\admin\ProductController::class, 'showList'])->name('admin.pages.view-product');
Route::get('/admin/products/add', [App\Http\Controllers\admin\ProductController::class, 'showAddForm'])->name('admin.pages.product.add.form');
Route::post('/admin/products/add-product', [App\Http\Controllers\admin\ProductController::class, 'addProduct'])->name('admin.pages.add.product');
Route::get('/admin/dashboard/edit-product/{id}', [App\Http\Controllers\admin\ProductController::class, 'editProduct'])->name('admin.pages.edit.product');
Route::post('/admin/dashboard/update-product/{id}', [App\Http\Controllers\admin\ProductController::class, 'updateProduct'])->name('admin.pages.update.product');
Route::get('/admin/dashboard/delete-product/{id}', [App\Http\Controllers\admin\ProductController::class, 'deleteProduct'])->name('admin.pages.delete.product');

//Order
Route::get('/admin/dashboard/view-order', [App\Http\Controllers\admin\OrderController::class, 'viewOrder'])->name('admin.pages.view.order');
Route::get('/admin/dashboard/edit-order', [App\Http\Controllers\admin\OrderController::class, 'editOrder'])->name('admin.pages.edit.order');
//update and delete is remaining

//Appointment
Route::get('/admin/dashboard/view-appointment', [App\Http\Controllers\admin\AppointmentController::class, 'showList'])->name('admin.pages.view.appointment');
Route::get('/admin/dashboard/add-appointment', [App\Http\Controllers\admin\AppointmentController::class, 'addAppointment'])->name('admin.pages.add.appointment');
Route::get('/admin/dashboard/edit-appointment', [App\Http\Controllers\admin\AppointmentController::class, 'editAppointment'])->name('admin.pages.edit.appointment');