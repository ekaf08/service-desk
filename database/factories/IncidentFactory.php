<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IncidentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $ctr = 1;
        $status = ['Open', 'eTiket'];
        return [
            'no_insiden' => 'INS-'.(string)($ctr++),
            'incident_type_id' => mt_rand(1, 2),
            'operator_id' => mt_rand(1, 30),
            'nip_pelapor' => $this->faker->nik(),
            'nama_pelapor' => $this->faker->name(),
            'opd_id' => mt_rand(1, 50),
            'no_hp' => $this->faker->phoneNumber(),
            'deskripsi' => $this->faker->paragraph(),
            'status_terakhir' => $status[mt_rand(0,1)],
            'created_at' => $this->faker->dateTimeBetween('-3 week', '+1 week'),
        ];
    }
}
