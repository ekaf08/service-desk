<?php

namespace Database\Seeders;

use App\Models\Access;
use App\Models\Category;
use App\Models\Channel;
use App\Models\Incident;
use App\Models\IncidentType;
use App\Models\Opd;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            IncidentTypeSeeder::class,
            OpdSeeder::class,
            ChannelSeeder::class,
            AccessSeeder::class,
            StatusSeeder::class,
            UserSeeder::class,
            IncidentSeeder::class,
        ]);   
    }
}
