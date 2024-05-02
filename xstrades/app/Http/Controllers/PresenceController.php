<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PresenceController extends Controller
{

    public function regulations(Request $request)
    {
        $lang = session()->get('locale');
        if ($lang) {
            App::setLocale($lang);
            session()->put('locale', $lang);
        } else {
            App::setLocale('en');
            session()->put('locale', 'en');
        }

        return view('regulations');
    }

    public function sponsorships(Request $request)
    {
        $lang = session()->get('locale');
        if ($lang) {
            App::setLocale($lang);
            session()->put('locale', $lang);
        } else {
            App::setLocale('en');
            session()->put('locale', 'en');
        }
        return view('sponsorships');
    }

    public function awards(Request $request)
    {

        $locale = App::getLocale();

        $companyAwards = json_decode(file_get_contents('../awards/' . $locale . '/company_awards.json'));
        $personalAwards = json_decode(file_get_contents('../awards/' . $locale . '/personal_awards.json'));


        $lang = session()->get('locale');
        if ($lang) {
            App::setLocale($lang);
            session()->put('locale', $lang);
        } else {
            App::setLocale('en');
            session()->put('locale', 'en');
        }
        return view('presence.awards', compact('companyAwards', 'personalAwards'));
    }

    public function advantages(Request $request)
    {
        $lang = session()->get('locale');
        if ($lang) {
            App::setLocale($lang);
            session()->put('locale', $lang);
        } else {
            App::setLocale('en');
            session()->put('locale', 'en');
        }
        return view('company.advantages');
    }

    public function careers(Request $request)
    {
        $lang = session()->get('locale');
        if ($lang) {
            App::setLocale($lang);
            session()->put('locale', $lang);
        } else {
            App::setLocale('en');
            session()->put('locale', 'en');
        }
        return view('company.careers');
    }

    public function events(Request $request)
    {
        $lang = session()->get('locale');
        if ($lang) {
            App::setLocale($lang);
            session()->put('locale', $lang);
        } else {
            App::setLocale('en');
            session()->put('locale', 'en');
        }
        return view('presence.events');
    }

    public function story(Request $request)
    {
        $lang = session()->get('locale');
        if ($lang) {
            App::setLocale($lang);
            session()->put('locale', $lang);
        } else {
            App::setLocale('en');
            session()->put('locale', 'en');
        }
        return view('company.story');
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


    public function singleSponsorship($lang, $slug)
    {
        if (view()->exists('sponsorships.' . $slug)) {
            return view('sponsorships.' . $slug);
        }
        abort(404);
    }

    public function singleEvents($lang, $slug)
    {
        // $images = File::allFiles(asset('img/prev-expos/expo-1/prev-expos-1.png'), true);
        $prev = [];
        $upcoming = [];
        $locale = App::getLocale();

        if (file_exists('../'. $slug .'/' . $locale . '/prev-' . $slug . '.json')) {
            $prev = json_decode(file_get_contents('../' . $slug . '/' . $locale .'/prev-' . $slug . '.json'), true);
        }
        if (file_exists('../' . $slug . '/' . $locale .'/upcoming-' . $slug . '.json')) {
            $upcoming = json_decode(file_get_contents('../' . $slug . '/' . $locale .'/upcoming-' . $slug . '.json'), true);
        }
        if (view()->exists('presence.events.' . $slug)) {
            return view('presence.events.' . $slug, compact('prev', 'upcoming'));
        }
        abort(404);
    }

    public function safety(Request $request)
    {
        $lang = session()->get('locale');
        if ($lang) {
            App::setLocale($lang);
            session()->put('locale', $lang);
        } else {
            App::setLocale('en');
            session()->put('locale', 'en');
        }
        return view('company.safety');
    }

    public function insurance(Request $request)
    {
        $lang = session()->get('locale');
        if ($lang) {
            App::setLocale($lang);
            session()->put('locale', $lang);
        } else {
            App::setLocale('en');
            session()->put('locale', 'en');
        }
        return view('company.insurance');
    }
    
    public function security(Request $request)
    {
        $lang = session()->get('locale');
        if ($lang) {
            App::setLocale($lang);
            session()->put('locale', $lang);
        } else {
            App::setLocale('en');
            session()->put('locale', 'en');
        }
        return view('company.security');
    }
}