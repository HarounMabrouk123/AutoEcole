<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CandidatsController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrainerController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Main', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware(['auth','admin']);
















require __DIR__.'/auth.php';



Route::get('/admin/dashbord',[AdminController::class,'index']) ;


//car routes
Route::get('admin/dashbord/Cars',[CarController::class,'index'])->name('admin.dashbord.cars.index');
Route::get('admin/dashbord/Cars/create',[CarController::class,'create'])->name('admin.dashbord.cars.add');
Route::post('admin/dashbord/Cars',[CarController::class,'store']);
Route::delete('admin/dashbord/Cars/{car}',[CarController::class,'destroy']);
Route::get('admin/dashbord/Cars/{car}/edit', [CarController::class, 'edit'])->name('cars.edit');
Route::put('admin/dashbord/Cars/{car}', [CarController::class, 'update']);
//


Route::get('admin/dashbord/Trainers',[TrainerController::class,'index'])->name('admin.dashbord.trainer.index');
Route::get('/admin/dashbord/Trainers/create', [TrainerController::class, 'create'])->name('admin.dashbord.trainers.add');
Route::post('admin/dashbord/Trainers',[TrainerController::class,'store']);
Route::get('admin/dashbord/Trainers/{trainer}/edit', [TrainerController::class, 'edit'])->name('trainers.edit');
Route::put('admin/dashbord/Trainers/{trainer}', [TrainerController::class, 'update']);
Route::delete('admin/dashbord/Trainers/{trainer}',[TrainerController::class,'destroy']);


//car page


Route::get('/cars',[HomeController::class,'Cars']) ;
Route::get('/trainers',[HomeController::class,'Trainers']) ;






//candidats routes
Route::get('admin/dashbord/Candidats',[CandidatsController::class,'index'])->name('admin.dashbord.candidats.index');
Route::get('admin/dashbord/Candidats/{candidat}/edit', [CandidatsController::class, 'edit'])->name('candidat.edit');
Route::put('admin/dashbord/Candidats/{candidat}', [CandidatsController::class, 'update']);
Route::delete('admin/dashbord/Candidats/{candidat}',[CandidatsController::class,'destroy']);

