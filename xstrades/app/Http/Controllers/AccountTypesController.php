<?php

namespace App\Http\Controllers;

use App\AccountType;
use App\Asset;
use App\ContractSpecification;
use App\Platform;
use stdClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;

class AccountTypesController extends Controller
{
    public function index(){
        return view('account-types');
    }

    public function tab($tab = null){
        return view('account-types', ['activeTab' => $tab]);
    }


    // public function getPlatforms(Request $request)
    // {


    //     App::setLocale(session()->get('locale'));

    //     $platforms = Platform::whereHas('contracts', function($contracts) use ($request){
    //         $contracts->where('account_type_id', $request->account_type);
    //     })->get();

    //     foreach($platforms as $platform ){
    //         $platform->account_id = intval($request->account_type);
    //     }

    //     return response()->json([
    //         'total' => $platforms->count(),
    //         'data' => $platforms
    //     ]);
    // }
    
    // public function getAssets(Request $request)
    // {
    //     $assets = DB::table('assets')
    //         ->select('*')
    //         ->orderBy('id')
    //         ->get();

    //     App::setLocale(session()->get('locale'));

    //     $assets = Asset::whereHas('contracts', function($contracts) use ($request){
    //         $contracts
    //         ->where('account_type_id', $request->account_type);
    //     })->get();
    //     foreach($assets as $asset){
    //         $asset->platform_id = intval($request->platform);
    //     }

    //     return response()->json([
    //         'total' => $assets->count(),
    //         'data' => $assets
    //     ]);
    // }

    public function getFilteredAccounts(Request $request){

        App::setLocale(session()->get('locale'));

        $assets = ContractSpecification::with(
            'asset', 'account_type'
        )
        ->with('unit', function($units){
            $units->withTranslation();
        })
        ->orderBy('id')
        ->get();
        return response()->json([
            'total' => $assets->count(),
            'data' => $assets
        ]);
    }

    public function getAssets(Request $request){
        
        App::setLocale(session()->get('locale'));

        $assets = Asset::all();

        if (isset($request->asset)) {
            $assets = Asset::whereIn('id', $request->asset)->get();
        }

        return response()->json([
            'total' => $assets->count(),
            'data' => $assets
        ]);
    }

    public function getAccountType(Request $request){
        App::setLocale(session()->get('locale'));

        $types = AccountType::all();

        if (isset($request->asset)) {
            $types = AccountType::whereHas('contracts', function($contracts) use ($request){
                $contracts->where('asset_id', $request->asset);
            })->get();
        }

        return response()->json([
            'total' => $types->count(),
            'data' => $types
        ]);
    }

    public function singleAccountType($lang, $type, $accountType = 'cent'){

        $availableAccountTypes = [
            'cent-account',
            'standard-account',
            'micro-account',
            'elite-account',
            'pro-account',
            'vip-account',
            'extra-account',
            'classic-account',
            'copy-standard',
            'copy-pro',
        ];


        $path = '../account_types/' . $accountType . '/' . App::getLocale();
        $formatedTables = [];
        if (file_exists($path)) {
            $tables = File::allFiles($path);
            $enTables = File::allFiles('../account_types/' . $accountType . '/en');
            foreach ($tables as $tableIndex => $table) {
                $records = json_decode(file_get_contents($path . '/' . $table->getRelativePathname()), true);
                $enRecords = json_decode(file_get_contents('../account_types/' . $accountType . '/en/' . $enTables[$tableIndex]->getRelativePathname()), true);
                foreach ($records as $key => $record) {
                    foreach ($record as $tablecol => $value) {

                        if (App::getLocale() == 'ar') {
                          
                            if ($enRecords[$key][array_keys($enRecords[$key])[0]] != 'Products' 
                            && $enRecords[$key][array_keys($enRecords[$key])[0]] != 'Lot Size' 
                            && $enRecords[$key][array_keys($enRecords[$key])[0]] != 'Minimum Volume' 
                            && $enRecords[$key][array_keys($enRecords[$key])[0]] != 'Base Currency') {

                                if ($tablecol == 'mt5' || $tablecol == 'mt4') {
                                    $records[$key][$tablecol] = $enRecords[$key][$tablecol];
                                }
                            }
                        } 
                        elseif ( App::getLocale() == 'jp') {
                          
                            if ($enRecords[$key][array_keys($enRecords[$key])[0]] != 'Products' 
                            && $enRecords[$key][array_keys($enRecords[$key])[0]] != 'Lot Size' 
                            && $enRecords[$key][array_keys($enRecords[$key])[0]] != 'Minimum Volume' 
                            && $enRecords[$key][array_keys($enRecords[$key])[0]] != 'Demo Accounts' 
                            && $enRecords[$key][array_keys($enRecords[$key])[0]] != 'Commissions' 
                            && $enRecords[$key][array_keys($enRecords[$key])[0]] != 'Minimum Deposit'
                            && $enRecords[$key][array_keys($enRecords[$key])[0]] != 'Maximum Total Volume Of Pending Orders'
                            && $enRecords[$key][array_keys($enRecords[$key])[0]] != 'Maximum Total Volume Of Open Orders'
                            && $enRecords[$key][array_keys($enRecords[$key])[0]] != 'Maximum Number Of Pending Orders'
                            && $enRecords[$key][array_keys($enRecords[$key])[0]] != 'Maximum Number Of Open Orders'
                            && $enRecords[$key][array_keys($enRecords[$key])[0]] != 'Maximum Number Of Pending & Open Orders'
                            && $enRecords[$key][array_keys($enRecords[$key])[0]] != 'Max Total Volume Of Pending Orders'
                            && $enRecords[$key][array_keys($enRecords[$key])[0]] != 'Max Total Volume Of Open Orders'
                            && $enRecords[$key][array_keys($enRecords[$key])[0]] != 'Swap Free Option'
                            
                            ) {

                                if ($tablecol == 'mt5' || $tablecol == 'mt4') {
                                    $records[$key][$tablecol] = $enRecords[$key][$tablecol];
                                }
                            }
                        }
                        elseif ( App::getLocale() == 'zh-Hans') {
                            if ($enRecords[$key][array_keys($enRecords[$key])[0]] != 'Lot Size'
                            && $enRecords[$key][array_keys($enRecords[$key])[0]] != 'Minimum Volume' 
                            ){
                                if ($tablecol == 'mt5' || $tablecol == 'mt4') {
                                    $records[$key][$tablecol] = $enRecords[$key][$tablecol];
                                }
                            }
                        }
                        
                        else {
                            if ($enRecords[$key][array_keys($enRecords[$key])[0]] != 'Products') {
                                if ($tablecol == 'mt5' || $tablecol == 'mt4') {
                                    if (!isset($enRecords[$key][$tablecol])) {
                                        unset($records[$key][$tablecol]);
                                    } else {

                                        $records[$key][$tablecol] = $enRecords[$key][$tablecol];
                                    }
                                }
                            }

                        }
                    }
                }
                $formatedTables[] = $records;
            }
        }


        if (in_array($accountType, $availableAccountTypes)) {
            return view('account-types.single-account', ['accountType' => $accountType, 'tables' => $formatedTables, 'enRecords' => $enRecords]);
        }
        abort(404);
    }
}