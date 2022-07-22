<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelatoLucidoController extends Controller
{
    public function rel_lucido() {
        return view('site.rel_lucido');
    }
}