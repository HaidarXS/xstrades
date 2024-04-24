<?php

namespace App\Http\Controllers;
use App\Language;
use App\Csr;
use Illuminate\Http\Request;

class CsrController extends Controller
{
    public function index($lang, $category = null){

        $language = Language::where('slug', $lang)->first();
        $csrs = [];

        $csrs = Csr::where('language_id', $language->id)->paginate(3);
            if($language){
                if($category){
                  
                    $csrs = Csr::where('slug', $category)->where('language_id', $language->id)->first();
                    if ($csrs) {
                        $otherCsrs = csr::where('id', '!=',  $csrs->id)->take(3)->get();
                        return view('csr.singleCsr', ['csr'=> $csrs, 'otherCsrs' => $otherCsrs]);
                    } else {
                        return redirect()->route('csr');
                    }
            }
            }
        return view('csr.csr',['csrs'=> $csrs]);
    }
}