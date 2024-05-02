<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MagazineController extends Controller
{
    public function index(Request $request)
    {
        return view('magazine.index');
    }

    public function singleMagazine(Request $request)
    {

        switch ($request->date) {
            case "nov2023":
                $pdf = "/pdf/xchanges.pdf";
                break;
            case "dec2023":
                $pdf = "/pdf/xchanges-dec-edition.pdf";
                break;
            case "jan2024":
                $pdf = "/pdf/xchanges-jan2024-edition.pdf";
                break;
            case "feb2024":
                $pdf = "/pdf/xchanges-feb2024.pdf";
                break;
            default:
            $pdf = "/pdf/xchanges.pdf";
        }

        $magazine = [
            'name' => $request->name,
            'date' => $request->date,
            'pdf' => $pdf,
        ];
        
        return view('magazine.single-magazine', compact('magazine'));
    }
}
