<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchivoController extends Controller
{
    public function store(Request $request)
    {
        $archivo = $request->file('file');

    }
}
