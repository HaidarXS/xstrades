<?php

namespace App\Http\Controllers;

use App\MarketAnalysisNew;
use App\AnalysisCategory;
use App\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AnalysisController extends Controller
{
    public function index($lang, $category = null)
    {

        $search = request()->search;


        $language = Language::where('slug', $lang)->first();
        $analysis = [];
        $categories = [];
        $cat = null;
        if ($language) {
            $categories = AnalysisCategory::all();

            if ($category) {
                $cat = AnalysisCategory::where('slug', $category)->first();
                if ($cat) {
                    $analysis = $cat-> analysis()->when($search, function ($analysis) use ($search) {
                        $analysis->where('title', 'like', '%' . $search . '%');
                    })->where('published', 1)->where('language_id', $language->id)->orderBy('published_date', 'desc')->paginate(3);
                    return view('market-analysis', ['categories' => $categories, 'analysis'=> $analysis, 'activeCategory' => $cat, 'preview'=>false]);
                } else {
                 

                    $analysis = MarketAnalysisNew::where('slug', $category)->where('published', 1)->where('language_id', $language->id)->first();
                    if ($analysis) {
                        $otherAnalysis = MarketAnalysisNew::where('id', '!=',  $analysis->id)->where('category_id',  $analysis->category->id)->where('published', 1)->take(3)->get();
                        return view('singleMarket-analysis', ['analysis'=> $analysis, 'otherAnalysis' => $otherAnalysis, 'categories' => $categories,'preview'=>false]);
                    } else {
                        return redirect()->route('analysis');
                    }
                    
                }
             
            } else {
                $analysis = MarketAnalysisNew::select()
                    ->when($search, function ($analysis) use ($search) {
                        $analysis->where('title', 'like', '%' . $search . '%');
                    })->where('published', 1)->where('language_id', $language->id)->orderBy('published_date', 'desc')->paginate(3);
            }

        }
        return view('market-analysis', ['categories' => $categories, 'analysis'=> $analysis, 'activeCategory' => $cat,'preview'=>false]);
    }

    public function show($lang, $slug)
    {
         $analys = MarketAnalysisNew::where('slug', $slug)
            ->where('published', 1)
            ->where('language_id', Language::where('slug', $lang)->value('id'))
            ->first();


        if (! $analys) {
            $englishAnalysis = MarketAnalysisNew::where('slug', $slug)
                ->where('published', 1)
                ->where('language_id', Language::where('slug', 'en')->value('id'))
                ->first();


            if ($englishAnalysis) {

                $otherAnalysis = MarketAnalysisNew::where('id', '!=', $englishAnalysis->id)
                    ->where('language_id', $englishAnalysis->language_id)
                    ->where('published', 1)
                    ->take(3)
                    ->get();

                $categories = AnalysisCategory::all();

                return redirect()->route('analysis.show', ['lang' => 'en', 'slug' => $slug]);
            }
        }

        abort(404);
    }

    public function listPreview($lang, $category = null)
    {

        $search = request()->search;


        $language = Language::where('slug', $lang)->first();
        $analysis = [];
        $categories = [];
        $cat = null;
        if ($language) {
            $categories = AnalysisCategory::all();

            if ($category) {
                $cat = AnalysisCategory::where('slug', $category)->first();
                if($cat){

                    $analysis = $cat->analysis()->when($search, function ($analysis) use ($search) {
                        $analysis->whereTranslationLike('title', '%' . $search . '%');
                    })->where('language_id', $language->id)->orderBy('published_date', 'desc')->paginate(3);
                    return view('market-analysis', ['categories' => $categories, 'analysis'=> $analysis, 'activeCategory' => $cat, 'preview' =>true]);
                }else{
                     $analys = MarketAnalysisNew::where('slug', $category)->first(); 

                    if ( $analys){
                        $otherAnalysis = MarketAnalysisNew::where('id', '!=',  $analys->id)
                        ->where('category_id',  $analys->category->id)
                        ->take(3)->get(); 
                        return view('singleMarket-analysis', ['analysis'=> $analysis, 'otheranalysis' => $otherAnalysis, 'preview'=>true ]);
                    }

                }
                } else {
                $analysis = MarketAnalysisNew::select()
                    ->when($search, function ($analysis) use ($search) {
                        $analysis->whereTranslationLike('title', '%' . $search . '%');
                    })->where('language_id', $language->id)->orderBy('published_date', 'desc')->paginate(3);
            }
        }

        return view('market-analysis', ['categories' => $categories, 'analysis'=> $analysis, 'activeCategory' => $cat, 'preview' =>true]);
    }

    public function shareOnFacebook(Request $request)
    {
        $url = 'https://www.facebook.com/sharer/sharer.php?t=' . $request->url;
        return redirect()->away($url);
    }

    public function shareOnTwitter(Request $request)
    {
        $url = 'https://x.com/intent/tweet?url=' . $request->url;
        return redirect()->away($url);
    }

    public function shareOnLinkedIn(Request $request)
    {
        $url = 'https://www.linkedin.com/sharing/share-offsite/?url=' . $request->url;
        return redirect()->away($url);
    }
}