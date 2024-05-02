<?php

namespace App\Http\Controllers;

use App\MediaRecord;
use App\MediaCategory;
use App\Language;
use Illuminate\Http\Request;

class MediaController extends Controller
{

    public function index($lang)
    {

        if(app()->getLocale() == 'zh-Hans' || app()->getLocale() == 'zh-Hant' ){
            return redirect()->route('home');
        }

        $language = Language::where('slug', $lang)->first();
        $mediaCategories = MediaCategory::all();

        foreach($mediaCategories as $category){
            $category->media = $category->media()->where('language_id', $language->id)->orderBy('date', 'desc')->take(3)->get();
        }

        return view('media-center.index', compact('mediaCategories'));
    }

    public function singleMedia($lang, $cat, $slug)
{
    if (app()->getLocale() == 'zh-Hans' || app()->getLocale() == 'zh-Hant') {
        return redirect()->route('home');
    }

    $language = Language::where('slug', $lang)->first();

    try {
        $singleMedia = MediaRecord::where('slug', $slug)->where('language_id', $language->id)->firstOrFail();
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        return redirect()->route('all-media');
    }

    return view('media-center.single-media', compact('singleMedia'));
}

    public function singleCategory($lang, $cat)
    {


        if (app()->getLocale() == 'zh-Hans' || app()->getLocale() == 'zh-Hant') {
            return redirect()->route('home');
        }
        $language = Language::where('slug', $lang)->first();

        $singleCategory = MediaCategory::where('slug', $cat)->firstOrFail();

        $singleCategory->media = $singleCategory->media()->orderBy('date', 'desc')->where('language_id', $language->id)->get();
       
        return view('media-center.single-category', compact('singleCategory','cat'));
    }

    public function press($lang)
    {

        if (app()->getLocale() == 'zh-Hans'|| app()->getLocale() == 'zh-Hant') {
            return redirect()->route('home');
        }
        $language = Language::where('slug', $lang)->first();

        $press = MediaCategory::where('slug', 'xs-press-releases')->firstOrFail();

        $press->media = $press->media()->where('language_id', $language->id)->orderBy('date', 'desc')->get();

        return view('media-center.press', compact('press'));
    }
}