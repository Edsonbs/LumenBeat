<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemporalController extends Controller
{
    public function showTemporal() {
        return view('temporalView');
    }
}
