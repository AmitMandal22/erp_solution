<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
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

Route::middleware('auth:employee')->group(function () {
    // Define routes for employees here
    Route::get('/c-admin-dashboard',[CompanyController::class,'view'])->name('c-admin.dashboard');
    Route::post('/company-details',[CompanyController::class,'companyDetails'])->name('company.details');

    Route::post('/company-all-employees',[EmployeeController::class,'allEmployee'])->name('company.all.employees');
});

Route::middleware('auth:web')->group(function () {
    
    // Super Admin
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/companies', [CompanyController::class, 'index'])->name('all.companies');
    Route::get('/add-company', [CompanyController::class, 'show'])->name('add.company');
    Route::post('/add-company', [CompanyController::class, 'store'])->name('add.new-company');
    Route::post('/employees', [EmployeeController::class, 'index'])->name('all.employees');
    
    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('get.login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('/edit-company-details', [CompanyController::class, 'edit'])->name('edit.company');
Route::post('/edit-employee-details', [EmployeeController::class, 'edit'])->name('edit.employee');
Route::post('/update-company-details/{id}', [CompanyController::class, 'update'])->name('update.company');
Route::post('/delete-employee/{id}', [EmployeeController::class, 'destroy'])->name('delete.employee');

Route::get('/add-employee', [EmployeeController::class, 'show'])->name('add.employee');
Route::post('/add-employee', [EmployeeController::class, 'store'])->name('add.new-employee');


require __DIR__.'/auth.php';