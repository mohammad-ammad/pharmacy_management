<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\LoginDashboardController;
use App\Http\Controllers\admin\DoctorController;
use App\Http\Controllers\admin\PatientController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\AppointmentController;
use App\Http\Controllers\admin\AdminOrderController;
//patient
use App\Http\Controllers\patient\OrderPlaceController;
use App\Http\Controllers\patient\OrderInfoController;
use App\Http\Controllers\patient\PatientOrderController;
use App\Http\Controllers\patient\AppointmentViewController;
//Doctor
use App\Http\Controllers\DoctorInfoController;
use App\Http\Controllers\DoctorAppointmentController;
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

//ADMIN ROUTES
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\admin\LoginDashboardController::class, 'showDashboard'])->name('admin.pages.dashboard');
    //Admin Manage Users
    //Admin manage Doctor
Route::get('/admin/dashboard/doctor', [App\Http\Controllers\admin\DoctorController::class, 'viewForm'])->name('admin.pages.view.doctor');
Route::get('/admin/dashboard/doctor/add', [App\Http\Controllers\admin\DoctorController::class, 'showAddForm'])->name('admin.pages.doctor.add.form');
Route::post('/admin/dashboard/doctor/add', [App\Http\Controllers\admin\DoctorController::class, 'addDoctor'])->name('admin.pages.add.doctor');
Route::get('/admin/dashboard/edit-doctor/{id}', [App\Http\Controllers\admin\DoctorController::class, 'editDoctor'])->name('admin.pages.edit.doctor');
Route::put('/admin/dashboard/update-doctor/{id}', [App\Http\Controllers\admin\DoctorController::class, 'updateDoctor'])->name('admin.pages.update.doctor');
Route::get('/admin/dashboard/delete-doctor/{id}', [App\Http\Controllers\admin\DoctorController::class, 'deleteDoctor'])->name('admin.pages.delete.doctor');
//Admin Manage Patient
Route::get('/admin/dashoard/patient', [App\Http\Controllers\admin\PatientController::class, 'showForm'])->name('admin.pages.view.patient');
Route::get('/admin/dashoard/patient/add', [App\Http\Controllers\admin\PatientController::class, 'showaddForm'])->name('admin.pages.patient.add.form');
Route::post('/admin/dashboard/patient-add', [App\Http\Controllers\admin\PatientController::class, 'addPatient'])->name('admin.pages.add.patient');
Route::get('/admin/dashboard/edit-patient/{id}', [App\Http\Controllers\admin\PatientController::class, 'editPatient'])->name('admin.pages.edit.patient');
Route::put('/admin/dashboard/update-patient/{id}', [App\Http\Controllers\admin\PatientController::class, 'updatePatient'])->name('admin.pages.update.patient');
Route::get('/admin/dashboard/patient-delete/{id}', [App\Http\Controllers\admin\PatientController::class, 'deletePatient'])->name('admin.pages.delete.patient');
    //Admin Manage Product
Route::get('/admin/dashboard/view-product', [App\Http\Controllers\admin\ProductController::class, 'showList'])->name('admin.pages.view-product');
Route::get('/admin/products/add', [App\Http\Controllers\admin\ProductController::class, 'showAddForm'])->name('admin.pages.product.add.form');
Route::post('/admin/products/add-product', [App\Http\Controllers\admin\ProductController::class, 'addProduct'])->name('admin.pages.add.product');
Route::get('/admin/dashboard/edit-product/{id}', [App\Http\Controllers\admin\ProductController::class, 'editProduct'])->name('admin.pages.edit.product');
Route::post('/admin/dashboard/update-product/{id}', [App\Http\Controllers\admin\ProductController::class, 'updateProduct'])->name('admin.pages.update.product');
Route::get('/admin/dashboard/delete-product/{id}', [App\Http\Controllers\admin\ProductController::class, 'deleteProduct'])->name('admin.pages.delete.product');
    //Order view, edit, delete 
Route::get('/admin/dashboard/view-order', [App\Http\Controllers\admin\AdminOrderController::class, 'listOrder'])->name('admin.pages.AdminOrder.view');
Route::get('/admin/dashboard/edit-order/{orderId}', [App\Http\Controllers\admin\AdminOrderController::class, 'editOrder'])->name('admin.pages.AdminOrders.edit');
Route::put('/admin/dashboard/update-Order/{orderId}', [App\Http\Controllers\admin\AdminOrderController::class, 'updateOrder'])->name('admin.pages.update.AdminOrder');
Route::get('/admin/dashboard/delete-order/{orderId}', [App\Http\Controllers\admin\AdminOrderController::class, 'deleteOrder'])->name('admin.pages.delete.AdminOrder');
//Admin view all Appointment
Route::get('/admin/dashboard/view-appointment', [App\Http\Controllers\admin\AppointmentController::class, 'viewAppointments'])->name('admin.pages.view.appointment');
});

//DOCOTOR ROUTES
Route::middleware(['auth', 'role:doctor'])->group(function () {
    Route::get('/dashboard/doctor', [App\Http\Controllers\admin\LoginDashboardController::class, 'indexDoctor'])->name('doctor.doctor.dashboard');
    //Appointment edit and update 
Route::get('/doctor/appointments', [App\Http\Controllers\doctor\DoctorAppointmentController::class, 'listAppointments'])->name('doctor.appointments.list');
Route::get('appointments/edit-status/{id}', [App\Http\Controllers\doctor\DoctorAppointmentController::class, 'editAppointmentStatus'])->name('doctor.appointments.edit.status');
Route::put('appointments/update-status/{id}', [App\Http\Controllers\doctor\DoctorAppointmentController::class, 'updateAppointmentStatus'])->name('doctor.appointments.update.status');
    //Doctor-info
Route::get('/doctor/info/create', [App\Http\Controllers\doctor\DoctorInfoController::class, 'create'])->name('doctor.info.create');
Route::post('/doctor/info/store', [App\Http\Controllers\doctor\DoctorInfoController::class, 'store'])->name('doctor.info.store');
Route::get('/doctor/info/edit/{id}', [App\Http\Controllers\doctor\DoctorInfoController::class, 'edit'])->name('doctor.info.edit');
Route::put('/doctor/info/update/{id}', [App\Http\Controllers\doctor\DoctorInfoController::class, 'update'])->name('doctor.info.update');
});

//PATIENT ROUTES
Route::middleware(['auth', 'role:patient'])->group(function () {
    Route::get('/dashboard/patient', [App\Http\Controllers\admin\LoginDashboardController::class, 'indexPatient'])->name('patient.patient.dashboard'); 
    //Patient View-Product
Route::get('/patient/dashboard/view-product', [App\Http\Controllers\patient\ProductController::class, 'showList'])->name('patient.pages.product');
    //Patient placeorder
Route::get('/patient/orders/place/{productId}', [App\Http\Controllers\patient\OrderPlaceController::class, 'placeOrder'])->name('patient.orders.place');
    //Patient View order-status
Route::get('/patient/view-order', [App\Http\Controllers\patient\OrderPlaceController::class, 'viewOrder'])->name('patient.view.order');
    //Patient add and view Appointments
Route::get('/patient/dashboard/view/appointment', [App\Http\Controllers\patient\AppointmentViewController::class, 'viewAppointment'])->name('patient.view.appointment');
Route::get('/patient/dashboard/add/appointment', [App\Http\Controllers\patient\AppointmentViewController::class, 'addAppointment'])->name('patient.add.appointment');
Route::post('/patient/dashboard/add/newAppointment', [App\Http\Controllers\patient\AppointmentViewController::class, 'AddNewAppointment'])->name('patient.add.new.appointment');
Route::get('/patient/appointment/delete/{id}', [App\Http\Controllers\patient\AppointmentViewController::class, 'deleteAppointment'])->name('patient.delete.appointment');

});