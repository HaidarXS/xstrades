<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\Http\Exceptions\NotFound;
use Illuminate\Support\Facades\App;

class AboutUsController extends Controller
{
    public function company(Request $request)
    {

        $lang = session()->get('locale');
        if ($lang){
            App::setLocale($lang);
            session()->put('locale', $lang);
        }else{
            App::setLocale('en');
            session()->put('locale', 'en');
        }

        $tabs = ['advantages', 'legal-documents', 'careers', 'awards', 'regulations', 'safety', 'insurance', 'security', 'xs-mastercard'];
        $tab = $request->tab;
        if (!in_array($tab, $tabs)) {
            abort('404');
        }
        return view('company', compact('tab'));
    }

    public function legal(Request $request)
    {
        $lang = session()->get('locale');
        if ($lang) {
            App::setLocale($lang);
            session()->put('locale', $lang);
        } else {
            App::setLocale('en');
            session()->put('locale', 'en');
        }
        return view('company.legals');
    }

    public function contactUs(Request $request)
    {
        $lang = session()->get('locale');
        if ($lang) {
            App::setLocale($lang);
            session()->put('locale', $lang);
        } else {
            App::setLocale('en');
            session()->put('locale', 'en');
        }
        return view('company.contact-us');
    }

  
}