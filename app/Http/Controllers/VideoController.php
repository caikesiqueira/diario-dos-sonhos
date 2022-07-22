<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function vid_lucido() {
        return view('site.vid_lucido');
    }
}