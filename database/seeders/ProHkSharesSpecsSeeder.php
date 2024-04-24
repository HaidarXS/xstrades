<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\ContractSpecification;
class ProHkSharesSpecsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonFilePath = storage_path('../shares/pro/hk-shares.json'); 
        $jsonString = file_get_contents($jsonFilePath);
        $jsonArray = json_decode($jsonString, true);

        foreach ($jsonArray as $data) {
         ContractSpecification::create($data);
        }
    }
}
