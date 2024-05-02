<?php

namespace App\Console\Commands;

use App\AccountType;
use App\Asset;
use App\ContractSpecification;
use App\Platform;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use PDO;

class contract_specs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:contract-specs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'import contract specs from jsons';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $path = 'contract_specs/';
        $accountTypes = File::directories($path);
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        ContractSpecification::truncate();
        foreach ($accountTypes as $accountType) {
            $accountTypeName = basename($accountType);
            $newAccountType = AccountType::whereTranslation('title', $accountTypeName)->first();
            if (!$newAccountType) {
                $newAccountType = new AccountType();
                $newAccountType->title = $accountTypeName;
                $newAccountType->slug = basename($accountType);
                $newAccountType->save();
            }
            $assets = File::allFiles($accountType);
            foreach ($assets as $asset) {
                $assetName = ucwords(str_replace('-', ' ', $asset->getFilenameWithoutExtension()));
                $newAsset = Asset::whereTranslation('title', $assetName)->first();
                if (!$newAsset) {
                    $newAsset = new Asset();
                }
                $newAsset->title = $assetName;
                $newAsset->slug = $asset->getFilenameWithoutExtension();
                $newAsset->save();
                $specs = json_decode(file_get_contents($accountType . '/' . $asset->getRelativePathname()), true);
                foreach ($specs as $spec) {
                    $contractSpecs = new ContractSpecification();
                    $contractSpecs->symbol = $spec['Symbol'];
                    $contractSpecs->spread = $spec['Spread'];
                    $contractSpecs->commissions = $spec['Commissions'];
                    $contractSpecs->long_swap = $spec['Swap Long'];
                    $contractSpecs->short_swap = $spec['Swap Short'];
                    $contractSpecs->leverage = $spec['Leverage'];
                    $contractSpecs->contract_size = $spec['Contract Size'];
                    $contractSpecs->asset_id = $newAsset->id;
                    $contractSpecs->account_type_id = $newAccountType->id;
                    $contractSpecs->mt4 = true;
                    $contractSpecs->mt5= true;
                    if (basename($accountType) == 'VIP' || basename($accountType) == 'Cent' || basename($accountType) == 'Micro') {
                        
                        $contractSpecs->mt4 = false;
                    }
                    $contractSpecs->save();

                }
            }
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
