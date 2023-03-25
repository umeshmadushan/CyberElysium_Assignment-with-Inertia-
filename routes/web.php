<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

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

//home
Route::get('/',[HomeController::class,'index'])->name('dashboard');

//students
Route::prefix('/students')->group(function() {
      Route::get('/',[StudentController::class,'index'])->name('studentList');
      Route::post('/add',[StudentController::class,'store'])->name('studentList.add');
      Route::delete('/{student_id}/delete',[StudentController::class,'delete'])->name('student.delete');
      Route::get('/{student_id}/get',[StudentController::class,'get'])->name('student.get');
      Route::get('/{student_id}/edit',[StudentController::class,'edit'])->name('student.edit');
      Route::post('/{student_id}/update',[StudentController::class,'update'])->name('student.update');
      Route::get('/{student_id}/statusUpdate',[StudentController::class,'statusUpdate'])->name('student.statusUpdate');
      Route::get('/{student_id}/statusUpdateactive',[StudentController::class,'statusUpdateActive'])->name('student.statusUpdateactive');
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
