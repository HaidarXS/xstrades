<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\Http\Exceptions\NotFound;
use Illuminate\Support\Facades\App;

class InstitutionsController extends Controller
{
    public function institutions(Request $request)
    {
        $lang = session()->get('locale');
        if ($lang){
            App::setLocale($lang);
            session()->put('locale', $lang);
        }else{
            App::setLocale('en');
            session()->put('locale', 'en');
        }

        $tabs = ['liquidity', 'white-labels', 'tailored-services', 'consultancy', 'technology', 'full-solutions'];
        $tab = $request->tab;
        if (isset($tab) && !in_array($tab, $tabs)) {
            abort(404);
        }
        return view('institutions', compact('tab'));
    }

  
}
