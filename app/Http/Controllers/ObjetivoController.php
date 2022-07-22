<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObjetivoController extends Controller
{
    public function obj_lucido() {
        return view('site.obj_lucido');
    }
}