<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\Http\Exceptions\NotFound;
use Illuminate\Support\Facades\App;
use App\Asset;

class TradingController extends Controller
{

    public function index(Request $request)
    {
        $lang = session()->get('locale');
        if ($lang) {
            App::setLocale($lang);
            session()->put('locale', $lang);
        } else {
            App::setLocale('en');
            session()->put('locale', 'en');
        }
        return view('markets.home');
    }


    public function markets(Request $request)
    {
        
        $lang = session()->get('locale');
        if ($lang) {
            App::setLocale($lang);
            session()->put('locale', $lang);
        } else {
            App::setLocale('en');
            session()->put('locale', 'en');
        }

        $tabs = ['shares', 'indices', 'metals', 'energy', 'commodities', 'crypto', 'forex', 'markets', 'futures'];

        $conditionCounts = [
            'shares' => 5,
            'indices' => 9,
            'metals' => 8,
            'energy' => 8,
            'commodities' => 5,
            'crypto' => 7,
            'forex' => 8,
            'markets' => 7,
            'futures' => 5,
        ];

        $faqCounts = [
            'shares' => 4,
            'indices' => 4,
            'metals' => 5,
            'energy' => 4,
            'commodities' => 3,
            'crypto' => 6,
            'forex' => 7,
            'markets' => 7,
            'futures' => 5,
        ];
        $tab = $request->tab;
        
        if (!in_array($tab, $tabs)) {
            throw new NotFound();
        }

        if ($tab == 'forex') {
            $asset = Asset::where('slug', 'fx-minors')
                ->orWhere('slug', 'fx-majors')
                ->orWhere('slug', 'fx-exotic')
                ->get();
            return view('markets', compact('tab', 'asset', 'faqCounts', 'conditionCounts'));
        }elseif ($tab == 'shares'){
            $asset = Asset::where('slug', 'us-shares')
                ->orWhere('slug', 'hk-shares')
                ->orWhere('slug', 'eu-shares')
                ->get();
            return view('markets', compact('tab', 'asset', 'faqCounts', 'conditionCounts'));
        }elseif ($tab == 'crypto'){
            $asset = Asset::where('slug', 'cryptos')
                ->get();
            return view('markets', compact('tab', 'asset', 'faqCounts', 'conditionCounts'));
        }

        $asset = Asset::where('slug', $tab)->get();

        return view('markets', compact('tab', 'asset', 'faqCounts', 'conditionCounts'));
    }

    public function tradingConditions($lang)
    {
        return view('trading-condition');
    }
}