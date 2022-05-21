<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\ClientProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = Client::all();
        $clients->each(function ($client) {
            $clientProfile = ClientProfile::factory()->make();
            $client->clientProfile()->create($clientProfile->toArray());
        });
        // $countClients = $clients->count(); 

        // $collectionIndividual = ClientProfile::factory($countClients)->make();
        // $collectionIndividual->each(function ($clientProfile) use ($clients) {
        //     $clientProfile->client_id = $clients->random()->id;
        //     $clientProfile->save();
        // });
    }
}
