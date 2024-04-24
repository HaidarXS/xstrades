<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\Http\Exceptions\NotFound;

class WebtraderController extends Controller
{

    public function index($lang, $platform = null)
    {
        if ($platform)
        {
            $platforms = ['mt4', 'mt5'];
            if (!in_array($platform, $platforms)) {
                throw new NotFound();
            }
        }else{
            $platform = 'mt4';
        }
    
        return view('webtrader.index', compact('platform'));
        
    }

    public function platform(Request $request)
    {
        $validatedData = $request->validate([
            'platform' => 'required|in:metatrader4,metatrader5',
            'server' => 'nullable',
        ]);

        $platform = $validatedData['platform'];
        $server = $validatedData['server'] ?? null;

        if ($platform == 'metatrader4') {
            return view('webtrader.mt4');
        } else if ($platform == 'metatrader5') {
            switch ($server) {
                case "https://mt5webtrader.XSTrades.com/terminal":
                    $serverName = "XSFintech-REAL-1";
                    break;
                case "https://mt5webtrader2.XSTrades.com/terminal":
                    $serverName = "XSFintech-REAL-2";
                    break;
                case "https://mt5webtrader3.XSTrades.com/terminal":
                    $serverName = "XSFintech-REAL-3";
                    break;
                case "https://mt5webtrader4.XSTrades.com/terminal":
                    $serverName = "XSFintech-REAL-4";
                    break;
                case "https://mt5webtraderdemo.XSTrades.com/terminal":
                    $serverName = "XSFintech-DEMO";
                    break;
                default:
                $serverName = "XSFintech-REAL-1";
            }
            return view('webtrader.mt5', compact('serverName', 'server'));
        } else {
            throw new NotFound('Platform not found');
        }
    }

    public function mt4 (){
        return view('webtrader.mt4');
    }

    public function mt5 (Request $request){
        if (!isset($_GET['server'])) {
            $server = "https://mt5webtrader.XSTrades.com/terminal";
        }else{
            switch ($_GET['server']) {
                case "XSFintech-REAL-1":
                    $server = "https://mt5webtrader.XSTrades.com/terminal";
                    break;
                case "XSFintech-REAL-2":
                    $server = "https://mt5webtrader2.XSTrades.com/terminal";
                    break;
                case "XSFintech-REAL-3":
                    $server = "https://mt5webtrader3.XSTrades.com/terminal";
                    break;
                case "XSFintech-REAL-4":
                    $server = "https://mt5webtrader4.XSTrades.com/terminal";
                    break;
                case "XSFintech-DEMO":
                    $server = "https://mt5webtraderdemo.XSTrades.com/terminal";
                    break;
                default:
                    $server = "https://mt5webtrader.XSTrades.com/terminal";
            }
        }

        return view('webtrader.mt5', compact('server'));
    }

}
