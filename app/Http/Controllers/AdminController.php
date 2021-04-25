<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        return $this->middleware('auth:admin');
    }

    public function index(){
        $data['name'] = Auth::User()->getTable();
        return view('src.admin.home')->with($data);
    }

    public function adminLayout(){
        return view('src.admin.includes.layout');
    }
}
