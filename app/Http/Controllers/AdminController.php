<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        return $this->middleware('auth:admin');
    }

    public function index(){
        $lang = auth::user()->lang;
        config(['app.locale' => $lang]);
        $data['name'] = Auth::User()->getTable();
        return view('src.admin.home')->with($data);
    }

    public function adminChangeToFrench(){
        DB::table('admins')->where('id', auth()->user()->id)->update(['lang' => 'fr' ]);
        App::setLocale('fr');
        session()->put('key', 'fr');
        //Artisan::call('config:cache');
        $notification = array(
            'message' => ''.trans('messages.change_to_french').'',
            'alert-type' => 'success');
        return redirect()->back()->with($notification);
        }

    public function adminChangeToEnglish(){
        DB::table('admins')->where('id', auth()->user()->id)->update(['lang' => 'en' ]);
            App::setLocale('en');
        session()->put('key', 'en');
        //Artisan::call('config:cache');
        $notification = array(
            'message' => ''.trans('messages.change_to_english').'',
            'alert-type' => 'success');
        return redirect()->back()->with($notification);
        }

    public function adminLayout(){
        return view('src.admin.includes.layout');
    }
}
