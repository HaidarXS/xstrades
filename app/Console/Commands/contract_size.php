<?php

namespace App\Console\Commands;

use App\ContractSpecification;
use App\Unit;
use App\UnitTranslation;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class contract_size extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contract_size:fix_unit';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $contractSpecs = ContractSpecification::all();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Unit::truncate();
        UnitTranslation::truncate();


        foreach ($contractSpecs as $key => $spec) {

                $size = '';
                $sizeUnit = '';

                if (count(explode(' ', $spec->contract_size)) > 2) {
                    $strExplode = explode(' ', $spec->contract_size, 2);
                } else {
                    $strExplode = explode(' ', $spec->contract_size);
                }
                if (count($strExplode) >= 2) {
                    $size = $strExplode[0];
                    $sizeUnit = $strExplode[1];


                    $spec->contract_size = $size;

                    $unit = Unit::where('slug', $sizeUnit)->first();

                    
                    if (!$unit) {
                        $unit = new Unit;
                        $unit->title = $sizeUnit;
                        $unit->slug = $sizeUnit;
                        $unit->save();
                    }
                    
                    $spec->unit_id = $unit->id;
                    $spec->save();
                }
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
