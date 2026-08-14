<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, String $id)
    {
        $title = "Sistem Sekolah - edit kelas";
        return view('schoolclass.edit', [
        'title' => $title,
        ]);
    }
}
