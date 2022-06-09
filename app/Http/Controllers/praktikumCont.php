<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class praktikumCont extends Controller
{
    public function kalabAslab() {
        return view('kalabAslab');
    }

    public function aslab() {
        return view('aslab');
    }

    public function dosbim() {
        return view('dosbim');
    }
}
