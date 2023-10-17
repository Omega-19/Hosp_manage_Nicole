<?php

use App\Http\Controllers\HospManageController;
use App\Http\Controllers\PatientManagesController;
use App\Models\HospManage;
use App\Models\PatientManages;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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





// Authentification

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});






// gestion hospitalière

Route::get('HospManages/medecin', [HospManageController::class, 'medecin'])->name('HospManages.medecin')->middleware(['auth', 'verified']);

Route::get('HospManages/personnel', [HospManageController::class, 'personnel'])->name('HospManages.personnel')->middleware(['auth', 'verified']);

Route::get('HospManages/planning', [HospManageController::class, 'Planning'])->name('HospManages.planning')->middleware(['auth', 'verified']);







//gestion des patients

// Route::resource('HospManages',PatientManagesController::class)
// ->only(['index', 'store', 'create', 'update', 'edit', 'show', 'destroy'])
// ->middleware(['auth', 'verified']);

Route::get('PatientManages/index', [HospManageController::class, 'index'])->name('PatientManages.index')->middleware(['auth', 'verified']);
Route::get('PatientManages/create', [HospManageController::class, 'create'])->name('PatientManages.create')->middleware(['auth', 'verified']);







//gestion des employés











// require __DIR__.'/auth.php';
