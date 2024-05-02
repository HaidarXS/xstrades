<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::middleware(['locale'])->prefix('{lang?}')->group(function () {

    // Route::get('/influencers', function () {
    //     return redirect()->route('partners', ['slug' => 'influencers']);
    // })->name('redirects.influencers');

    // Route::get('/indices', function () {
    //     $page = 'indices';
    //     return redirect()->route('markets', ['tab' => $page]);
    // })->name('redirects.indices');
    
    // Route::get('/metals', function () {
    //     $page = 'metals';
    //     return redirect()->route('markets', ['tab' => $page]);
    // })->name('redirects.metals');
    
    // Route::get('/consultancy', function () {
    //     $page = 'consultancy';
    //     return redirect()->route('institutions', ['tab' => $page]);
    // })->name('redirects.consultancy');
    
    // Route::get('/careers', function () {
    //     return redirect()->route('careers');
    // })->name('redirects.careers');
    
    // Route::get('/liquidity', function () {
    //     $page = 'liquidity';
    //     return redirect()->route('institutions', ['tab' => $page]);
    // })->name('redirects.liquidity');
    
    // Route::get('/cryptocurrency', function () {
    //     $page = 'cryptos';
    //     return redirect()->route('markets', ['tab' => $page]);
    // })->name('redirects.cryptocurrency');
    
    // Route::get('/forex', function () {
    //     $page = 'forex';
    //     return redirect()->route('markets', ['tab' => $page]);
    // })->name('redirects.forex');
    
    // Route::get('/digital-affiliates', function () {
    //     $page = 'digital-affiliates';
    //     return redirect()->route('partners', ['slug' => $page]);
    // })->name('redirects.digital-affiliates');
    
    // Route::get('/local-partners', function () {
    //     $page = 'local-partners';
    //     return redirect()->route('partners', ['slug' => $page]);
    // })->name('redirects.local-partners');
    
    // Route::get('/education-experts', function () {
    //     $page = 'education-experts';
    //     return redirect()->route('partners', ['slug' => $page]);
    // })->name('redirects.education-experts');
    
    // Route::get('/legal-documents', function () {
    //     $page = 'your-hard-coded-slug';
    //     return redirect()->route('legal-documents');
    // })->name('redirects.legal-documents');
    
    // Route::get('/partnership', function () {
    //     return redirect()->route('partners');
    // })->name('redirects.partnership');
    
    // Route::get('/metatrader-5', function () {
    //     $page = 'your-hard-coded-slug';
    //     return redirect()->route('mt5');
    // })->name('redirects.metatrader-5');
    
    // Route::get('/contact-us', function () {
    //     $page = 'contact-us';
    //     return redirect()->route('company', ['tab' => $page]);
    // })->name('redirects.contact-us');
    
    // Route::get('/about-us', function () {
    //     return redirect()->route('story');
    // })->name('redirects.about-us');
    
    // Route::get('/asset-managers', function () {
    //     $page = 'asset-managers';
    //     return redirect()->route('partners', ['slug' => $page]);
    // })->name('redirects.asset-managers');
    
    // Route::get('/commodities-trading', function () {
    //     $page = 'commodities';
    //     return redirect()->route('markets', ['tab' => $page]);
    // })->name('redirects.commodities-trading');
    
    // Route::get('/call-back', function () {
    //     $page = 'your-hard-coded-slug';
    //     return redirect()->route('home-page');
    // })->name('redirects.call-back');
    
    // Route::get('/new-home-it', function () {
    //     abort(404);
    //     // return redirect()->route('switch', ['lang' => 'it']);
    // })->name('redirects.new-home-it');
    
    // Route::get('/new-home-de', function () {
    //     abort(404);
    //     // return redirect()->route('switch', ['lang' => 'de']);
    // })->name('redirects.new-home-de');
    
    // Route::get('/trading-account-types', function () {
    //     return redirect()->route('account_types');
    // })->name('redirects.trading=account-types');
    
    // Route::get('/xs-mobile-trader', function () {
    //     return redirect()->route('platforms');
    // })->name('redirects.xs-mobile-trader');
    
    // Route::get('/new-home', function () {
    //     $page = 'your-hard-coded-slug';
    //     return redirect()->route('home-page');
    // })->name('redirects.new-home');
    
    // Route::get('/new-home-ar', function () {
    //     return redirect()->route('switch', ['lang' => 'ar']);
    // })->name('redirects.new-home-ar');


    Route::fallback(function ($lang, $slug=null) {
        switch ($slug) {
            case 'funding-methods' : 
            case 'legal-documents' : 
            case 'careers' :
                return redirect()->route($slug, ['lang' => $lang]);
            break;

            case 'shares' : 
            case 'indices' : 
            case 'metals' : 
            case 'forex' : 
            case 'energies' : 
            case 'cryptocurrency' : 
            case 'commodities-trading':
                $route = 'markets';
                $tab = $slug;
                switch ($tab) {
                    case 'cryptocurrency':
                        $tab = 'cryptos';
                        break;
                    case 'commodities-trading':
                        $tab = 'commodities';
                        break;
                    // case 'energy';
                    //     $tab = 'energy';
                    case 'energies':
                        $tab = 'energy';
                        break;
                    default:
                        # code...
                        break;
                }
                return redirect()->route( $route, [ 'lang' => $lang, 'tab' => $tab ]);
            break;

            case 'trading-account-types' :
                return redirect()->route('account_types', ['lang' => $lang]);
            break;

            case 'contract-specifications' :
                // return redirect()->route('contract_specs', ['lang' => $lang]);
            break;

            case 'metatrader-4':
            case 'metatrader-5':
                return redirect( $lang .'/platforms/'. $slug);
            break;

            case 'partnership' :
                return redirect()->route('partners', ['lang' => $lang]);
            break ;
            case 'introducing-brokers' :
            case 'asset-managers' :
            case 'local-partners' :
            case 'digital-affiliates' :
            case 'influencers' :
            case 'education-experts' :
                return redirect()->route('partners', ['lang' => $lang, 'slug' => $slug]);
            break;

            case 'liquidity':
            case 'technology':
            case 'consultancy':
            case 'white-labels':
            case 'tailored-services':
                return redirect()->route('institutions', ['lang' => $lang, 'tab' => $slug]);
            break;

            case 'xs-web-trader':
            case 'xs-mobile-trader':
                return redirect()->route('platforms', ['lang' => $lang]);
            break;
            
            case 'contact-us':
            case 'new-home-it':
            case 'new-home-de':
            case 'faq':
                return view('403');
            break;

            case 'about-us':
                return redirect()->route('company', ['lang' => $lang, 'tab' => 'story']);

            default:
                abort(404);
            break;
        }
    });

});
