<?php

namespace Database\Seeders;

use App\Models\Access;
use Illuminate\Database\Seeder;

class AccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accessData = [
            [ 
                'nama_role' => 'Koordinator', 
                'level' => 1
            ],
            [ 
                'nama_role' => 'Service Desk Operator', 
                'level' => 2
            ],
            [ 
                'nama_role' => 'Teknisi', 
                'level' => 3
            ],
            [ 
                'nama_role' => 'Service Desk Tier 1', 
                'level' => 4
            ],
            [ 
                'nama_role' => 'User Biasa', 
                'level' => 5
            ],
            [ 
                'nama_role' => 'Kepala Dinas', 
                'level' => 5
            ],
            [ 
                'nama_role' => 'Kepala Seksi', 
                'level' => 5
            ],
        ];

        foreach($accessData as $data){
            Access::create([
                'nama_role' => $data['nama_role'],
                'level' => $data['level']
            ]);
        }  
    }
}
