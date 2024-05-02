<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class GuideController extends Controller
{
    public function index(Request $request){
        if(App::getLocale() == 'jp'){
            abort(404);
        }
        return view('guide.index');
    }

    public function singleGuide(Request $request)
    {
        if (App::getLocale() == 'zh-Hans' || App::getLocale() == 'zh-Hant'){
            $pdf = "/pdf/user-guide-cn.pdf";
        } elseif(App::getLocale() == 'jp'){
            abort(404);
        }else{
            $pdf = "/pdf/user-guide-" . App::getLocale() . ".pdf";
        }
    
        $font = 'Open Sans';
    
        $guide = [
            'name' => $request->name,
            'date' => $request->date,
            'pdf' => $pdf,
            'font' => $font,
        ];
    
    
        return view('guide.single-guide', compact('guide'));
    }
    
}