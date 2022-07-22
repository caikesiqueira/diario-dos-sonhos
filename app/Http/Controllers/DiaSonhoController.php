<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiaSonhoController extends Controller
{
    public function dia_sonho() {
        return view('site.dia_sonho');
    }
}