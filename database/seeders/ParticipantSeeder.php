<?php

namespace Database\Seeders;

use App\Models\Participant;
use Illuminate\Database\Seeder;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $json = file_get_contents(database_path('data/taic.2023.json'));
        $data = json_decode($json, true);
        foreach ($data as $participant) {
            Participant::create([
                'regNo' => $participant['regNo'],
                'name' => $participant['name'],
                'billedAmount' => $participant['billedAmount']
            ]);
        }
    }
}
