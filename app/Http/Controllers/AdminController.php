<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        return $this->middleware('auth:admin');
    }

    public function index(){
        return view('src.admin.home');
    }

    public function adminLayout(){
        return view('src.admin.includes.layout');
    }
}
