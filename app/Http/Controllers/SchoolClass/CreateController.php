<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
         $title = "Sistem Sekolah - Membuat Data kelas";
        return view('schoolclass.create', [
        'title' => $title,
        ]); 
    }
}
