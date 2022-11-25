<?php

namespace Database\Seeders;

use App\Models\RTHModel;
use Illuminate\Database\Seeder;


class RTHSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("database/data/kehati_rth.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                RTHModel::create([
                    "id" => $data['0'],
                    "kategori" => $data['1'],
                    "jenis" => $data['2'],
                    "lokasi" => $data['3'],
                    "kecamatan" => $data['4'],
                    "kelurahan" => $data['5'],
                    "luas" => $data['6'],
                    "keterangan_luas" => $data['7'],
                    "catatan" => $data['8'],
                    "latitude" => $data['9'],
                    "longitude" => $data['10'],
                    "tim" => $data['11'],
                    "jumlah_pcc" => $data['12']
                ]);
            }
            $firstline = false;
        }
    }
}
