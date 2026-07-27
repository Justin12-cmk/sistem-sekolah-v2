<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function index()
    {
        return "ini adalah halaman daftar student";
    }
    public function show(string $id)
    {
        return"Menampilkan detail student dengan ID: {$id}";
    }

    public function create(){
        return"Ini adalah halaman tambah student";  
    }

    public function edit(string $id){
        return"Ini adalah halaman edit student";
    }
    
    public function store(){
        return"Melakukan penambahan data student baru";
    }

    public function update(string $id){
        return"Mengubah data student dengan ID: {$id}";
    }

    public function destroy(string $id){
        return"Menghapus data student dengan ID: {$id}";
    }
}
