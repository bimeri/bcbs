<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminStudentController extends Controller
{
    //
    public function __construct()
    {
        return $this->middleware('auth:admin');
    }
}
