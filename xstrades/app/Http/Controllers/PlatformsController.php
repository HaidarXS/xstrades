<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PlatformsController extends Controller
{
    public function __construct()
    {
        $lang = session()->get('locale');
        if ($lang){
            App::setLocale($lang);
            session()->put('locale', $lang);
        }else{
            App::setLocale('en');
            session()->put('locale', 'en');
        }
    }

    public function platforms(Request $request){
        return view('platforms.platforms');
    }

    public function mt4(Request $request){
        return view('platforms.metatrader4');
    }
    
    public function mt4Desktop(Request $request){
        return view('mt4.desktop');
    }

    public function mt4Web(Request $request){
        return view('mt4.web');
    }

    public function mt4Mac(Request $request){
        return view('mt4.mac');
    }

    public function mt4Ios(Request $request){
        return view('mt4.ios');
    }
    
    public function mt4Android(Request $request){
        return view('mt4.android');
    }




    public function mt5(Request $request){
        return view('platforms.metatrader5');
    }

    public function mt5Desktop(Request $request){
        return view('mt5.desktop');
    }

    public function mt5Web(Request $request){
        return view('mt5.web');
    }

    public function mt5Mac(Request $request){
        return view('mt5.mac');
    }

    public function mt5Ios(Request $request){
        return view('mt5.ios');
    }

    public function mt5Android(Request $request){
        return view('mt5.android');
    }
}
