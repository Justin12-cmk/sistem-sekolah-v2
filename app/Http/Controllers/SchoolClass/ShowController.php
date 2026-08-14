<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, String $id)
    {
        $title = "Sistem Sekolah - Menampilkan data kelas";
        return view('schoolclass.show', [
        'title' => $title,
        ]);
    }
}
