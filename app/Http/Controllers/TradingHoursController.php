<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TradingHoursController extends Controller
{
    public function index(){
        return view('accounts.trading-hours');
    }

    public function tab($tab = null)
    {
        return view('accounts.trading-hours', ['activeTab' => $tab]);
    }
}