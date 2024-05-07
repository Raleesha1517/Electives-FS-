<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AwarenessController;
use App\Http\Middleware\LocalizationMiddleware;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Doctor;
use App\Http\Middleware\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
 
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/localization/{locale}',LocaleController::class)->name('localization');
 
Route::middleware(LocalizationMiddleware::class)
    ->group(function ()
    {
        Route::get('/awareness', [AwarenessController::class, 'index'])->name('awareness.index');

        // Route::get('/dashboard', function () {
        //     return view('dashboard');
        // })->middleware(['auth', 'verified'])->name('dashboard');
        
        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });
        
        require __DIR__.'/auth.php';

        Route::middleware(['auth',Admin::class])->group(function () {
            Route::get('admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
            Route::get('admin/doctors',[AdminController::class,'doctorsAdd'])->name('admin.doctors');
            Route::post('admin/doctors',[AdminController::class,'doctorsPost']);
            Route::get('admin/admin',[AdminController::class,'adminAdd'])->name('admin.admin');
            Route::post('admin/admin',[AdminController::class,'adminPost']);
            Route::get('admin/patients/{id}', [AdminController::class, 'deletePatient'])->name('admin.patients.delete');
            Route::get('admin/doctors/{id}', [AdminController::class, 'deleteDoctor'])->name('admin.doctors.delete');
            Route::get('admin/admins/{id}', [AdminController::class, 'deleteAdmin'])->name('admin.admins.delete');
        });

        Route::middleware(['auth',Doctor::class])->group(function () {
            Route::get('doctors/dashboard',[DoctorController::class,'index'])->name('doctors.dashboard');
            Route::get('doctors/patient',[DoctorController::class,'viewpatient']);
            Route::post('doctors/patient',[DoctorController::class,'addpatient']);
            Route::get('doctors/patient/{id}', [DoctorController::class, 'deletePatient'])->name('patient.delete');
            Route::get('doctors/patients/{id}', [DoctorController::class, 'viewPatientDetails'])->name('doctors.viewPatientDetails');
            Route::get('doctors/viewpatients/{id}', [DoctorController::class, 'deleteRecord'])->name('doctor.delete');

        });

        Route::middleware(['auth',User::class])->group(function () {
            Route::get('users/dashboard',[UserController::class,'index'])->name('users.dashboard');
            Route::get('users/records',[UserController::class,'createRecord'])->name('users.records');
            Route::post('users/records',[UserController::class,'postRecord']);
            Route::get('users/seizure/{id}', [UserController::class,'show'])->name('seizure.details');
            Route::get('users/dashboard/{id}', [UserController::class, 'deleteRecord'])->name('record.delete');
        });

    });

    

// Route::get('/welcome/{locale}', function (string $locale) {
//     if (! in_array($locale, ['en', 'sn','tm'])) {
//         abort(400);
//     }
 
//     App::setLocale($locale);
//     return view('welcome');
    
// });


