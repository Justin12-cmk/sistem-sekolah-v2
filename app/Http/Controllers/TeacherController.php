<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return "ini adalah halaman daftar teacher";
    }
    public function show(string $id)
    {
        return"Menampilkan detail teacher dengan ID: {$id}";
    }

    public function create(){
        return"Ini adalah halaman tambah teacher";
    }

    public function edit(string $id){
        return"Ini adalah halaman edit teacher";
    }
    
    public function store(){
        return"Melakukan penambahan data teacher baru";
    }

    public function update(string $id){
        return"Mengubah data teacher dengan ID: {$id}";
    }

    public function destroy(string $id){
        return"Menghapus data teacher dengan ID: {$id}";
    }
}
