<?php

namespace Database\Seeders;

use App\Models\BurungModel;
use App\Models\BurungRTHModel;
use Illuminate\Database\Seeder;

class BurungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("database/data/kehati_burung.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                BurungModel::create([
                    "nama_jenis" => $data['0'],
                    "spesies" => $data['1'],
                    "iucn" => $data['2'],
                    "image" => $data['3']
                ]);
            }
            $firstline = false;
        }

        $csvFile = fopen(base_path("database/data/kehati_burung_rth.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                $id_rth = str_replace('.','', $data['3']);
                $id_rth = str_replace('          ','', $id_rth);
                BurungRTHModel::create([
                    "nama" => $data['0'],
                    "id_rth" => $id_rth,
                    "nama_rth" => $data['2']
                ]);
            }
            $firstline = false;
        }
    }
}
