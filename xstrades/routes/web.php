<?php

include 'cms.php';

use Illuminate\Http\Request;
use App\Mail\WebinarEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Spatie\Sitemap\SitemapGenerator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\PartnersConroller;
use App\Http\Controllers\TradingController;
use App\Http\Controllers\PresenceController;
use App\Http\Controllers\PlatformsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AccountTypesController;
use App\Http\Controllers\MagazineController;
use App\Http\Controllers\InstitutionsController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContractSpecsController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\WebtraderController;
use App\Http\Controllers\TradingHoursController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\AnalysisController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\AcademyController;
use App\Http\Controllers\CsrController;
use App\Http\Controllers\EducationalController;


Route::get('/', [LangController::class, 'index'])->name('home-page');

Route::get('/get-accounts', [AccountTypesController::class, 'getAccountType'])->name('getAccounts');
Route::get('/get-platforms', [AccountTypesController::class, 'getPlatforms'])->name('getPlatforms');
Route::get('/get-assets', [AccountTypesController::class, 'getAssets'])->name('getAssets');
Route::get('/get-filtered-accounts', [AccountTypesController::class, 'getFilteredAccounts'])->name('getFilteredAccounts');

// admin routes
// Route::prefix('/admin')->middleware('auth')->group(function () {
//     Route::get('/', [LoginController::class, 'showLoginForm']);
// });
// Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/admin/login')->name('login.attempt')->uses([LoginController::class, 'login']);
// Route::get('/author/register', [RegisterController::class, 'showRegistrationForm']);
// Route::post('/author/register', [RegisterController::class, 'register'])->name('register');
// Auth::routes(['login' => false, 'register' => false]);

// Route::get('/', [LangController::class, 'index']);
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');

Route::get('new-home-ar', function () {
    return redirect()->route('switch', ['lang' => 'ar']);
});



Route::middleware(['locale'])->prefix('{lang?}')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/switch/', [LangController::class, 'switch'])->name('switch');
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/company/awards/', [PresenceController::class, 'awards'])->name('awards');
    Route::get('/company/legal-documents/', [AboutUsController::class, 'legal'])->name('legal-documents');
    Route::get('/company/story/', [PresenceController::class, 'story'])->name('story');
    Route::get('/company/careers/', [PresenceController::class, 'careers'])->name('careers');
    Route::get('/company/advantages/', [PresenceController::class, 'advantages'])->name('advantages');

    Route::get('/company/events/', [PresenceController::class, 'events'])->name('events');
    Route::get('/company/events/{slug}/', [PresenceController::class, 'singleEvents'])->name('singleEvents');

    Route::get('/company/regulations/', [PresenceController::class, 'regulations'])->name('regulations');
    Route::get('/company/sponsorships/', [PresenceController::class, 'sponsorships'])->name('sponsorships');
    Route::get('/company/sponsorships/{slug}/', [PresenceController::class, 'singleSponsorship'])->name('singleSponsorship');

    Route::get('/company/{tab}/', [AboutUsController::class, 'company'])->name('company');

    // Route::get('/markets/cryptos/', function(){
    //     return redirect(App::getLocale(). '/markets/crypto');
    //  });

    // Route::get('/markets/energies/', function(){
    //    return redirect(App::getLocale(). '/markets/energy');
    // });

    // Route::get('/company/safety', [App\Http\Controllers\PresenceController::class, 'safety'])->name('safety');
    // Route::get('/company/insurance', [App\Http\Controllers\PresenceController::class, 'insurance'])->name('insurance');
    // Route::get('/company/security', [App\Http\Controllers\PresenceController::class, 'security'])->name('security');

    Route::get('/markets/', [TradingController::class, 'index'])->name('marketspage');
    Route::get('/markets/{tab}/', [TradingController::class, 'markets'])->name('markets');
    Route::get('/platforms/', [PlatformsController::class, 'platforms'])->name('platforms');

    Route::get('/platforms/metatrader-4/', [PlatformsController::class, 'mt4'])->name('mt4');
    Route::get('/platforms/metatrader-4-desktop/', [PlatformsController::class, 'mt4Desktop'])->name('metatrader-4-desktop');
    Route::get('/platforms/metatrader-4-web/', [PlatformsController::class, 'mt4Web'])->name('metatrader-4-web');
    Route::get('/platforms/metatrader-4-mac/', [PlatformsController::class, 'mt4Mac'])->name('metatrader-4-mac');
    Route::get('/platforms/metatrader-4-ios/', [PlatformsController::class, 'mt4Ios'])->name('metatrader-4-ios');
    Route::get('/platforms/metatrader-4-android/', [PlatformsController::class, 'mt4Android'])->name('metatrader-4-android');

    Route::get('/platforms/metatrader-5/', [PlatformsController::class, 'mt5'])->name('mt5');
    Route::get('/platforms/metatrader-5-desktop/', [PlatformsController::class, 'mt5Desktop'])->name('metatrader-5-desktop');
    Route::get('/platforms/metatrader-5-web/', [PlatformsController::class, 'mt5Web'])->name('metatrader-5-web');
    Route::get('/platforms/metatrader-5-mac/', [PlatformsController::class, 'mt5Mac'])->name('metatrader-5-mac');
    Route::get('/platforms/metatrader-5-ios/', [PlatformsController::class, 'mt5Ios'])->name('metatrader-5-ios');
    Route::get('/platforms/metatrader-5-android/', [PlatformsController::class, 'mt5Android'])->name('metatrader-5-android');
  
    Route::get('/institutions/{tab?}/', [InstitutionsController::class, 'institutions'])->name('institutions')->middleware('hideForJapanese');
 
    Route::get('/media/', [MediaController::class, 'index'])->name('all-media');
    Route::get('/media/xs-press-releases/', [MediaController::class, 'press'])->name('press');
    Route::get('/media/{category}/', [MediaController::class, 'singleCategory'])->name('single-category');
    Route::get('/media/{category}/{slug}/', [MediaController::class, 'singleMedia'])->name('single-media');

    Route::get('/security/', function () {
        return view('security');
    })->name('security');



    Route::get('/campaign-social/', function () {
        return view('campaigns.campaign-social');
    })->name('campaign-social');
    Route::post('/campaign-social/', function () {
        return view('campaigns.campaign-social');
    })->name('campaign-social-form');

    Route::get('/campaign-email/', function () {
        return view('campaigns.campaign-email');
    })->name('campaign-email');
    Route::post('/campaign-email/', function () {
        return view('campaigns.campaign-email');
    })->name('campaign-email-form');

    Route::get('/campaign-ib/', function () {
        return view('campaigns.campaign-ib');
    })->name('campaign-ib');
    Route::post('/campaign-ib/', function () {
        return view('campaigns.campaign-ib');
    })->name('campaign-ib-form');

    Route::get('/backend/', function () {
        return view('october::backend.index');
    });


    Route::get('/partners/{slug?}/', [PartnersConroller::class, 'index'])->name('partners');




    Route::get('/blog/preview/{category?}/', [BlogsController::class, 'listpreview'])->name('blogs.previewlist')->middleware(['admin']);
    Route::get('/blog/{category?}/', [BlogsController::class, 'index'])->name('blogs');

    Route::get('/market-analysis/preview/{category?}/', [AnalysisController::class, 'listpreview'])->name('analysis.previewlist')->middleware(['admin']);
    Route::get('/market-analysis/{category?}/', [AnalysisController::class, 'index'])->name('analysis');
    Route::get('/csr/{category?}/', [CsrController::class, 'index'])->name('csr');


    // Route::get('/course/preview/{category?}', [CoursesController::class, 'listpreview'])->name('blogs.previewlist')->middleware(['admin']);
    // Route::get('/course/{category?}/', [CoursesController::class, 'index'])->name('course');
    // Route::get('/course/{slug}/', [CoursesController::class, 'singleCourse'])->name('singleCourse');

    // Route::get('/blog/{slug}', 'BlogsController@show')->name('blogs.show');
    // Route::get('/blog/{category}/{slug}/', [BlogsController::class, 'show'])->name('blogs.show');

    Route::get('/accounts/trading-conditions/', function () {
        return view('trading-conditions');
    })->name('trading_conditions');

    Route::get('/accounts/account-types/{type?}/', [AccountTypesController::class, 'index'])->name('account_types');
    Route::get('/accounts/account-types/{tab?}/', [AccountTypesController::class, 'tab'])->name('account_types_tab');

    Route::get('/accounts/account-types/{type?}/{account_type?}', [AccountTypesController::class, 'singleAccountType'])->name('account_type_details');
    Route::get('/accounts/funding-methods/{slug?}/', function ($lang, $slug = null) {
        if ($slug) {
            if (view()->exists('funding-methods.' . $slug . '-table')) {
                $section = $slug;
            }
            return view('funding-methods', ['section' => $section]);
        }else{
                $section = 'deposits';
                return view('funding-methods', ['section' => $section]);
        }

        return view('funding-methods');
    })->name('funding-methods');

    Route::get('/accounts/contract-specs/{account_type?}/{slug?}/', [ContractSpecsController::class, 'ContractSpec'])->name('contract_specs');

    // Route::get('/get-accounts/', [AccountTypesController::class, 'getAccountType'])->name('getAccounts');
    // Route::get('/get-platforms/', [AccountTypesController::class, 'getPlatforms'])->name('getPlatforms');
    // Route::get('/get-assets/', [AccountTypesController::class, 'getAssets'])->name('getAssets');
    // Route::get('/get-filtered-accounts/', [AccountTypesController::class, 'getFilteredAccounts'])->name('getFilteredAccounts');

    Route::get('/accounts/xs-mastercard/', function () {
        return view('xs-mastercard');
    })->name('xs-mastercard')->middleware('hideForJapanese');

    Route::get('/safety/', function () {
        return view('safety');
    })->name('safety');

    Route::get('/investors/copy-trading', function(){
        return view('hoko-cloud.copy-trading');
    })->name('copy-trading');

    Route::get('/investors/copy-trading/hokocloud', function(){
        return view('hoko-cloud.hokocloud');
    })->name('hokocloud');

    // Route::get('/economic-calendar', function () {
    //     return view('economic-calendar');
    // });

    Route::get('/xs-magazine/', [MagazineController::class, 'index'])->name('xs-magazine');
    Route::get('/xs-magazine/{name}/{date}/', [MagazineController::class, 'singleMagazine'])->name('single-magazine');

    Route::get('/user-guides/', [GuideController::class, 'index'])->name('xs-guide');
    Route::get('/user-guides/{name}/', [GuideController::class, 'singleGuide'])->name('single-guide');


    Route::get('/insurance/', function () {
        return view('insurance');
    })->name('insurance');
    Route::get('/accounts/dynamic-leverage/', function () {
        return view('dynamic-leverage.index');
    })->name('dynamic-leverage');
    Route::get('/webtrader/', [WebtraderController::class, 'index'])->name('webtrader');
    Route::get('/webtrader-{platform}/', [WebtraderController::class, 'index'])->name('webtrader-checked');

    // Route::get('/investors/copy-trading', function () {
    //     return view('copy-trading.index');
    // })->name('copy-trading');

    // Route::get('/investors/copy-trading/hokocloud', function () {
    //     return view('copy-trading.hokocloud');
    // })->name('hokocloud');

    Route::get('/accounts/trading-hours/{tab?}/', [TradingHoursController::class, 'tab'])->name('trading-hours-tab');
    Route::get('/accounts/trading-hours/', [TradingHoursController::class, 'index'])->name('trading-hours');

    Route::get('/courses/preview/{category?}/', [CoursesController::class, 'listpreview'])->name('courses.previewlist')->middleware(['admin']);
    Route::get('/course-overview/{slug}/', [CoursesController::class, 'courseOverview'])->name('course-overview');
    Route::get('/single-course/{slug}/', [CoursesController::class, 'singleCourse'])->name('course-single');
    Route::get('/courses/{category?}/', [CoursesController::class, 'index'])->name('courses');

    Route::get('/glossary/', [AcademyController::class, 'index'])->name('glossary');
    Route::get('/educational-video/', [EducationalController::class, 'index'])->name('educational-video');
    Route::get('/educational-webinars/', [EducationalController::class, 'WebinarIndex'])->name('educational-webinars');


    Route::get('/overview/', function(){return view('overview');})->name('overview');

    Route::get('/trading-tools/', function(){return view('trading-tools.trading-tools');})->name('trading-tools');
    Route::get('/economic-calendar/', function(){return view('trading-tools.economic-calendar');})->name('economic-calendar');
    Route::get('/investors/pamm/', function(){return view('pamm');})->name('pamm');

});

Route::post('/webtrader/mt4/', [WebtraderController::class, 'platform'])->name('webtrader.mt4');
Route::post('/webtrader/mt5/', [WebtraderController::class, 'platform'])->name('webtrader.mt5');

Route::get('/send-email/{email}', function ($email) {
    Mail::to($email)->send(new WebinarEmail());
})->name('send-email');

Route::post('/create-lead', [LeadController::class, 'createLead'])->name('create.lead');

Route::post('/get-leads', [LeadController::class, 'getLeads'])->name('show.lead');

Route::get('/blog/share/facebook/', [BlogsController::class, 'shareOnFacebook'])->name('blog.share.facebook');
Route::get('/blog/share/twitter/', [BlogsController::class, 'shareOnTwitter'])->name('blog.share.twitter');
Route::get('/blog/share/linkedin/', [BlogsController::class, 'shareOnLinkedin'])->name('blog.share.linkedin');

Route::get('/market-analysis/share/facebook/', [AnalysisController::class, 'shareOnFacebook'])->name('analysis.share.facebook');
Route::get('/market-analysis/share/twitter/', [AnalysisController::class, 'shareOnTwitter'])->name('analysis.share.twitter');
Route::get('/market-analysis/share/linkedin/', [AnalysisController::class, 'shareOnLinkedin'])->name('analysis.share.linkedin');
// Auth::routes();