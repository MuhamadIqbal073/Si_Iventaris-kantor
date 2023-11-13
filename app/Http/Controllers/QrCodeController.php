<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    public function index()
    {
        return view('pages.qr.index');
    }

    public function handler()
    {

    }
}
