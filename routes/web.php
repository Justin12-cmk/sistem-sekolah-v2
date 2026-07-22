<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Manajemen Siswa
Route::name('students.')->prefix('students')->group(function(){
    Route::get('/', [StudentController::class,'index'])->name('index');

Route::get('/{id}', function($id){
    return "menapilkan detail siswa dengan id: {$id}";
})->name('show');
});
