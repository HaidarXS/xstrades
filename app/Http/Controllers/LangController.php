<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

class LangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locale = App::getLocale(); // Get the current locale
        return redirect()->route('home', ['lang' => $locale]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function switch(Request $request)
    {
        
        $lang = $request->lang;

        if ($lang) {
            App::setLocale($lang);
            session()->put('locale', $lang);
        } else {
            App::setLocale('en');
            session()->put('locale', 'en');
        }

        $prevRoute = app('router')->getRoutes(app('url')->previous())->match(app('request')->create(app('url')->previous()));
        $params = [];
        if(count($prevRoute->parameters()) > 0) {
            foreach ($prevRoute->parameters() as $key=> $param){
                $params[$key] = $param;
            }
        }
        $params['lang'] = $lang;

        return redirect()->route($prevRoute->getName(), $params);
    }
}
