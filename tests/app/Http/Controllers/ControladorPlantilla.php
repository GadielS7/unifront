<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPlantilla extends Controller
{
    public function ctrTraerPlantilla()
    {
        return view('plantilla');
    }
}
