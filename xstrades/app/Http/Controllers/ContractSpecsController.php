<?php

namespace App\Http\Controllers;

use App\AccountType;
use App\Asset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ContractSpecsController extends Controller
{
    public function index($lang, $account_type = 'standard', $slug = null)
    {
        $records = [];
        $section = 'all';
        $path = '../contract_specs/' . $account_type;
        if (!file_exists($path)) {
            abort(404);
        }
        if ($slug) {
            $section = $slug;
        }
        if ($section == 'all') {
            $allSpecs = File::allFiles($path);
            foreach ($allSpecs as $spec) {
                $records = array_merge($records, json_decode(file_get_contents('../contract_specs/' . $account_type . '/' . $spec->getRelativePathname()), true));
            }
        }
        if (file_exists('../contract_specs/' . $account_type . '/' . $section . '.json')) {
            $records = json_decode(file_get_contents('../contract_specs/' . $account_type . '/' . $section . '.json'), true);
        }
        if (request()->onlyTable) {
            return view('contract_specs.common-table', ['section' => $section, 'accountType' => $account_type, 'records' => $records]);
        }
        return view('contract-specs', ['section' => $section, 'accountType' => $account_type, 'records' => $records]);
    }

    public function ContractSpec($lang, Request $request)
    {
        if ($request->account_type) {
            $account_type = AccountType::where('slug', $request->account_type)->first();
        }else{
            $account_type = null;
        }

        if ($request->slug) {
            $slug = Asset::where('slug', $request->slug)->first();
        }else{
            $slug = null;
        }

        return view('contract-specs', compact('account_type', 'slug'));
    }
}
