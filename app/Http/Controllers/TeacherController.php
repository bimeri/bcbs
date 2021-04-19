<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    public function __construct()
    {
        return $this->middleware('auth:teacher');
    }

    public function teacherLaygout(){
        return;
    }
}
