<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = json_decode(File::get("database/data/status.json"));
        foreach ($statuses as $key => $status) {
            Status::create([
                'status' => $status->status,
                'deskripsi' => $status->deskripsi,
            ]);
        }
    }
}
