<?php

namespace Database\Seeders;

use App\Models\SoccerTeam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoccerTeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SoccerTeam::factory()->count(100)->create();
    }
}
