<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LugarSonhoController extends Controller
{
    public function lug_sonho() {
        return view('site.lug_sonho');
    }
}