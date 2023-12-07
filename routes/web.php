<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
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
Route::get('/admin/login', [App\Http\Controllers\admin\DashboardController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\admin\DashboardController::class, 'login']);
Route::get('/admin/dashboard', [App\Http\Controllers\admin\DashboardController::class, 'showDashboard'])->name('admin.dashboard');

//Docotor
Route::get('/admin/dashboard/doctor', [App\Http\Controllers\admin\DoctorController::class, 'viewForm'])->name('admin.view.doctor');
Route::get('/admin/dashboard/add-doctor', [App\Http\Controllers\admin\DoctorController::class, 'addDoctor'])->name('admin.add.doctor');
Route::get('/admin/dashboard/edit-doctor', [App\Http\Controllers\admin\DoctorController::class, 'editDoctor'])->name('admin.edit.doctor');
//update and delete is remaining

//Patient
Route::get('/admin/dashboard/patient', [App\Http\Controllers\admin\PatientController::class, 'showForm'])->name('admin.view.patient');
Route::get('/admin/dashboard/add-patient', [App\Http\Controllers\admin\PatientController::class, 'addPatient'])->name('admin.add.patient');
Route::get('/admin/dashboard/edit-patient', [App\Http\Controllers\admin\PatientController::class, 'editPatient'])->name('admin.edit.patient');
//update and delete is remaining

//Product
Route::get('/admin/dashboard/view-product', [App\Http\Controllers\admin\ProductController::class, 'showList'])->name('admin.view.product');
Route::get('/admin/dashboard/add-product', [App\Http\Controllers\admin\ProductController::class, 'addProduct'])->name('admin.add.product');
Route::get('/admin/dashboard/edit-product', [App\Http\Controllers\admin\ProductController::class, 'editProduct'])->name('admin.edit.product');
//update and delete is remaining

//Order
Route::get('/admin/dashboard/view-order', [App\Http\Controllers\admin\OrderController::class, 'viewOrder'])->name('admin.view.order');
Route::get('/admin/dashboard/edit-order', [App\Http\Controllers\admin\OrderController::class, 'editOrder'])->name('admin.edit.order');
//update and delete is remaining

//Appointment
Route::get('/admin/dashboard/view-appointment', [App\Http\Controllers\admin\AppointmentController::class, 'showList'])->name('admin.view.appointment');
Route::get('/admin/dashboard/add-appointment', [App\Http\Controllers\admin\AppointmentController::class, 'addAppointment'])->name('admin.add.appointment');
Route::get('/admin/dashboard/edit-appointment', [App\Http\Controllers\admin\AppointmentController::class, 'editAppointment'])->name('admin.edit.appointment');