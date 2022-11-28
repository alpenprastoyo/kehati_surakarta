<?php

namespace Database\Seeders;

use App\Models\PohonModel;
use Illuminate\Database\Seeder;


class PohonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("database/data/kehati_pohon.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                PohonModel::create([
                    "id_rth" => $data['0'],
                    "nama_rth" => $data['1'],
                    "pcq" => str_replace(",",".",$data['2']),
                    "nama_jenis" => $data['3'],
                    "spesies" => $data['4'],
                    "tinggi" => str_replace(",",".",$data['5']),
                    "keliling" => $data['6'],
                    "diameter" => str_replace(",",".",$data['7']),
                    "jarak_pohon" => str_replace(",",".",$data['8']),
                    "panjang_coverage" => str_replace(",",".",$data['9']),
                    "lebar_coverage" => str_replace(",",".",$data['10']),
                    "latitude" => $data['11'],
                    "longitude" => $data['12'],
                    "iucn" => $data['13'],
                    "keterangan" => $data['14'],
                    "image" => $data['15'],
                ]);
            }
            $firstline = false;
        }
    }
}
