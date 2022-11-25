<?php

namespace Database\Seeders;

use App\Models\RTHImageModel;
use Illuminate\Database\Seeder;

class RTHImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("database/data/kehati_rth_image.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                RTHImageModel::create([
                    "id_rth" => $data['1'],
                    "image" => $data['2']
                ]);
            }
            $firstline = false;
        }
    }
}
