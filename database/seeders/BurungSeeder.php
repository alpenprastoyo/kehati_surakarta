<?php

namespace Database\Seeders;

use App\Models\BurungModel;
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
                    "id_rth" => $data['0'],
                    "nama_rth" => $data['1'],
                    "nama_jenis" => $data['2'],
                    "spesies" => $data['3'],
                    "jumlah" => $data['4'],
                    "latitude" => $data['5'],
                    "longitude" => $data['6'],
                    "iucn" => $data['7'],
                    "keterangan" => $data['8'],
                    "image" => $data['9'],
                ]);
            }
            $firstline = false;
        }
    }
}
