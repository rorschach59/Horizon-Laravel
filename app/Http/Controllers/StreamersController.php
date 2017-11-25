<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StreamersController extends Controller
{
    public function addPlanning()
    {
        return view('addPlanning');
    }
}
