<?php

namespace Database\Seeders;

use App\Models\IncidentType;
use Illuminate\Database\Seeder;

class IncidentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $incidentTypes = ['Tiket Insiden','Tiket Monitoring'];
        foreach ($incidentTypes as $incidentType) {
            IncidentType::create([
                'jenis_insiden' => $incidentType,
            ]);
        }
    }
}
