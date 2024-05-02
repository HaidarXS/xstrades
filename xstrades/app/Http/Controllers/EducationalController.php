<?php

namespace App\Http\Controllers;

use App\Video;
use App\Language;
use App\Educationalwebinar;
use Illuminate\Http\Request;

class EducationalController extends Controller
{
    public function index(Request $request, $lang){
        $language = Language::where('slug', $lang)->first();
        $videos = [];
        $videos = Video::where('language_id', $language->id)->orderBy('date', 'desc')->paginate(9);
        return view('educational-videos.educational-video',compact('videos'));
    }
    public function WebinarIndex(Request $request, $lang){
        $language = Language::where('slug', $lang)->first();
        $currentDate = now();
        
        $upcomingWebinars = Educationalwebinar::where('language_id', $language->id)->where('date', '>', $currentDate)
            ->orderBy('date', 'asc')
            ->paginate(3);

        $previousWebinars = Educationalwebinar::where('language_id', $language->id)->where('date', '<=', $currentDate)
            ->orderBy('date', 'desc')
            ->paginate(3);

        return view('educational-webinars.educational-webinars', compact('upcomingWebinars', 'previousWebinars'));
    }
    
}