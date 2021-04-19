<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function __construct()
    {
        return $this->middleware('auth:student');
    }

    public function studentLaygout(){
        return;
    }
}
