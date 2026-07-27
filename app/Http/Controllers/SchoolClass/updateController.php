<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class updateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, String $id)
    {
        return"Mengubah data schoolclass dengan ID: {$id}";
    }
}
