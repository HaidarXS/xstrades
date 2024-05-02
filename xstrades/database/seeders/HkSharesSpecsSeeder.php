<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\ContractSpecification;
class HkSharesSpecsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonFilePath = storage_path('../shares/standard/hk-shares.json'); 
        $jsonString = file_get_contents($jsonFilePath);
        $jsonArray = json_decode($jsonString, true);

        foreach ($jsonArray as $data) {
         ContractSpecification::create($data);
        }
    }
}