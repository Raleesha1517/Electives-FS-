<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UserController;
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
        Route::get('/awareness', function () {
            return view('awareness');
        });

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard');
        
        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });
        
        require __DIR__.'/auth.php';

        Route::middleware(['auth',Admin::class])->group(function () {
            Route::get('admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
            Route::get('admin/doctors',[AdminController::class,'doctorsAdd']);
            Route::post('admin/doctors',[AdminController::class,'doctorsPost']);
        });

        Route::middleware(['auth',Doctor::class])->group(function () {
            Route::get('doctors/dashboard',[DoctorController::class,'index'])->name('doctors.dashboard');
            Route::get('patient',[DoctorController::class,'index1'])->name('doctors.dashboard');
        });

        Route::middleware(['auth',User::class])->group(function () {
            Route::get('users/dashboard',[UserController::class,'index'])->name('users.dashboard');
        });

    });

    

// Route::get('/welcome/{locale}', function (string $locale) {
//     if (! in_array($locale, ['en', 'sn','tm'])) {
//         abort(400);
//     }
 
//     App::setLocale($locale);
//     return view('welcome');
    
// });


