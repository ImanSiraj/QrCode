<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeGeneratorController extends Controller
{
    public function index()
    {
        return view('github-qr-code');
    }
}
