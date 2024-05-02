<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($lang)
    {
       

        $locale = App::getLocale(); // Get the current locale

        $companyAwards = json_decode(file_get_contents('../awards/'. $locale .'/company_awards.json'));

        return view('homepage', compact('lang', 'companyAwards'));
    }
}