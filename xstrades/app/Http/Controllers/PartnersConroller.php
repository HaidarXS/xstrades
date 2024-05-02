<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PartnersConroller extends Controller
{
    public function index($lang, $slug=null)
    {

      

        $locale = App::getLocale();

        $companyAwards = json_decode(file_get_contents('../awards/'. $locale .'/company_awards.json'));
        if (
            ($slug === 'influencers' && App::getLocale() == 'jp') ||
            ($slug === 'education-experts' && App::getLocale() == 'jp') ||
            ($slug === 'asset-managers' && App::getLocale() == 'jp') ||
            ($slug === 'local-partners' && App::getLocale() == 'jp')
        ) {
            $slug='home';
        }
        
        if($slug == 'home'){
            return redirect()->route('partners');
        }
        if ($slug) {
            if (view()->exists('partners.' . $slug)) {
                return view('partners', ['section' => $slug, 'companyAwards' => $companyAwards]);
            }else{

                abort(404);
            }
        }else{
            return view('partners' , ['section' => 'home', 'companyAwards' =>$companyAwards]);
        }
    }
}