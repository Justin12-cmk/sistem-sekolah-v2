<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Sistem Sekolah - Daftar jurusan";
        $majors = [

            [

                'id' => 1,

                'code' => 'AKL',

                'name' => 'Akuntansi dan Keuangan Lembaga',

                'description' => 'Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.',

            ],

            [

                'id' => 2,

                'code' => 'TKJ',

                'name' => 'Teknik Komputer dan Jaringan',

                'description' => 'Program keahlian yang membekali murid dengan kompetensi instalasi, konfigurasi, dan pemeliharaan jaringan komputer.',

            ],

            [

                'id' => 3,

                'code' => 'BID',

                'name' => 'Bisnis Digital',

                'description' => 'Program keahlian yang membekali murid dengan kompetensi pemasaran dan pengelolaan bisnis berbasis digital.',

            ],

        ];
        return view('majors.index', [
        'title' => $title,
        'majors' => $majors
        ]);
    }

        /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Sistem Sekolah - Membuat data jurusan";
        return view('majors.show', [
        'title' => $title,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Sistem Sekolah - Membuat data jurusan";
        return view('majors.create', [
        'title' => $title,
        ]);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Sistem Sekolah - Mengubah data jurusan";
        return view('majors.edit', [
        'title' => $title,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Melakukan penambahan data Major baru";
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Mengubah data Major dengan ID: {$id}";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Mengubah data Major dengan ID: {$id}";
    }
}
