<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrarController extends Controller
{
    public function registrar(){
    	return view('registrarAlumno');
    }
}
