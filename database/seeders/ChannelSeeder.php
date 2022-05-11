<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Seeder;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $channelType = ['Telepon', 'E-mail', 'Walk-in'];
        foreach($channelType as $channel){
            Channel::create([
                'channel' => $channel
            ]);
        };
    }
}
