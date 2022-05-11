<?php

namespace Database\Seeders;

use App\Models\Opd;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class OpdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $opd = json_decode(File::get("database/data/opd.json"));
        $kecamatan = json_decode(File::get("database/data/kecamatan.json"));
        $kelurahan = json_decode(File::get("database/data/kelurahan.json"));

        foreach($opd as $key => $value){
            Opd::create([
                'nama_opd' => $value->nama_opd
            ]);
        }
        foreach($kecamatan as $key => $value){
            Opd::create([
                'nama_opd' => $value->nama_kec
            ]);
        }
        foreach($kelurahan as $key => $value){
            Opd::create([
                'nama_opd' => $value->nama_kel
            ]);
        }
    }
}
