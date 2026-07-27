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
        return"ini adalah halaman daftar Major";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return"Ini adalah halaman tambah Major";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return"Melakukan penambahan data Major baru";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return"Menampilkan detail Major dengan ID: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return"Ini adalah halaman edit Major";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return"Mengubah data Major dengan ID: {$id}";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return"Mengubah data Major dengan ID: {$id}";
    }
}
