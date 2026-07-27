<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SchoolClass\IndexController;
use App\Http\Controllers\SchoolClass\ShowController;
use App\Http\Controllers\SchoolClass\CreateController;
use App\Http\Controllers\SchoolClass\EditController;
use App\Http\Controllers\SchoolClass\StoreController;
use App\Http\Controllers\SchoolClass\UpdateController;
use App\Http\Controllers\SchoolClass\DestroyController;
use App\Http\Controllers\MajorController;
use Illuminate\Support\Facades\Route;

// Manajemen Siswa
Route::name('students.')->prefix('students')->group(function(){

// Halaman daftar siswa
Route::get('/', [StudentController::class,'index'])->name('index');

// Halaman detail siswa
Route::get('/{id}',[StudentController::class, 'show'])->name('show');

//Halaman Tambah Siswa
Route::get('/create',[StudentController::class, 'create'])->name('create');

//Halaman edit
Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('edit');

//Logika Tambah Siswa
Route::post('/', [StudentController::class, 'store'])->name('store');

//Logika Edit Siswa
Route::put('/{id}', [StudentController::class, 'Update'])->name('update');

//Logika Hapus Siswa
Route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');

});

// Manajemen Teacher
Route::name('teachers.')->prefix('teachers')->group(function(){

// Halaman daftar Teacher
    Route::get('/', [TeacherController::class,'index'])->name('index');

// Halaman detail Teacher
Route::get('/{id}',[TeacherController::class, 'show'])->name('show');

//Halaman Tambah Teacher
Route::get('/create',[TeacherController::class, 'create'])->name('create');

//Halaman edit
Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('edit');

//Logika Tambah Teacher
Route::post('/', [TeacherController::class, 'store'])->name('store');

//Logika Edit Teacher
Route::put('/{id}', [TeacherController::class, 'Update'])->name('update');

//Logika Hapus Teacher
Route::delete('/{id}', [TeacherController::class, 'destroy'])->name('destroy');

});

//Manejemen SchoolClass
Route::name('schoolclass.')->prefix('schoolclass')->group(function(){

// Halaman daftar SchoolClass
 Route::get('/', IndexController::class)->name('index');

// Halaman detail SchoolClass
Route::get('/{id}', ShowController::class)->name('show');

//Halaman Tambah SchoolClass
Route::get('/create', CreateController::class)->name('create');

//Halaman edit
Route::get('/{id}/edit', EditController::class)->name('edit');

//Logika Tambah SchoolClass
Route::post('/', StoreController::class)->name('store');

//Logika Edit SchoolClass
Route::put('/{id}', UpdateController::class)->name('update');

//Logika Hapus SchoolClass
Route::delete('/{id}', DestroyController::class)->name('destroy');

});

//Manajemen Data Kelas (Resource)
Route::resource('classes', MajorController::class);