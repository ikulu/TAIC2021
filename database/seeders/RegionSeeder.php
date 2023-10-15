<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(database_path('data/Regions.json'));
        $data = json_decode($json, true);
        foreach ($data as $region) {
            Region::create([
                'region' => $region['region']
            ]);
        }
    }
}
