<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;

class LanguageController extends Controller
{
    //
    public function __construct()
    {
        return $this->middleware('auth:admin');
    }

    public function changeToFrench(){
    DB::table(Auth::User()->getTable())->where('id', auth()->user()->id)->update(['lang' => 'fr' ]);
    App::setLocale('fr');
    session()->put('key', 'fr');
    Artisan::call('config:cache');
    $notification = array(
        'message' => 'Your language has been changed to French successfully!',
        'alert-type' => 'success');
   // $notification = auth()->User()->id;
    return App::getLocale();
    }

    public function changeToEnglish(){
        DB::table(Auth::User()->getTable())->where('id', auth()->user()->id)->update(['lang' => 'en' ]);
        App::setLocale('en');
        session()->put('key', 'en');
        Artisan::call('config:cache');
        $notification = array(
        'message' => 'Your language has been changed to English successfully!',
        'alert-type' => 'success');
    return App::getLocale();
    }
}
