<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Language;
use App\Glossary;;

class AcademyController extends Controller
{

    // public function index(Request $request, $lang)
    // {
    //     $language = Language::where('slug', $lang)->first();
    //     $glossaries = [];
    //     $letters = include(resource_path("lang/$lang/letters.php"));
    
    //     if ($language) {
    //         $glossaries = Glossary::where('language_id', $language->id)->get();
    
           
    //         $selectedLetter = $request->input('letter', 'A');
    
            
    //         if (!in_array($selectedLetter, $letters)) {
    //             $selectedLetter = reset($letters);
    //         }
    
    //         $filteredItems = ($selectedLetter !== 'all')
    //             ? array_filter($glossaries->toArray(), function ($glossary) use ($selectedLetter) {
                  
    //                 $firstLetter = preg_replace('/[إأ]/u', 'ا', mb_substr($glossary['title'], 0, 1, 'UTF-8'));
    //                 return strcasecmp($firstLetter, $selectedLetter) === 0;
    //             })
    //             : $glossaries->toArray();
    
    //         usort($filteredItems, function ($a, $b) {
    //             return strcasecmp($a['title'], $b['title']);
    //         });
    //     }
    
    //     return view('glossary.glossary', compact('filteredItems', 'selectedLetter', 'letters'));
    // }
    

public function index(Request $request, $lang){
    $language = Language::where('slug', $lang)->first();
    $glossaries = [];
    if($language){
        $glossaries = Glossary::where('language_id', $language->id)->get();

        $selectedLetter = $request->input('letter', 'A');

        
        $filteredItems = ($selectedLetter !== 'all')
        ? array_filter($glossaries->toArray(), function ($glossary) use ($selectedLetter) {
            return strcasecmp(substr($glossary['title'], 0, 1), $selectedLetter) === 0;
        })
        : $glossaries->toArray();
    
    usort($filteredItems, function ($a, $b) {
        return strcasecmp($a['title'], $b['title']);
    });
    
    $letters = range('A', 'Z');
    }
    return view('glossary.glossary', compact('filteredItems', 'selectedLetter', 'letters'));
}
    
    

}