<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekomendasiController extends Controller
{
    public function rekomendasi() {
        return view('rekomendasi');
    }
}
