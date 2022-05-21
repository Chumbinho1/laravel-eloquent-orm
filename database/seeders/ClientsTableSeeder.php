<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\SoccerTeam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $soccers = SoccerTeam::all();

        $collectionIndividual = Client::factory()->count(10)->individual()->make();
        $collectionIndividual->each(function ($client) use($soccers) {
            $client->soccer_team_id = $soccers->random()->id;
            $client->save();
        });
        
        $collectionLegal = Client::factory()->count(10)->legal()->make();
        $collectionLegal->each(function ($client) use($soccers) {
            $client->soccer_team_id = $soccers->random()->id;
            $client->save();
        });
    }
}
