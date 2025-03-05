<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitizenshipSeeder extends Seeder
{
    public function run()
    {
        $citizenships = [
            'Filipino', 'American', 'Canadian', 'British', 'Australian', 'Indian', 'Chinese', 'Japanese', 'German', 'French', 'Italian', 'Spanish', 'Brazilian', 'Mexican', 'Russian'
        ]; // Add more

        foreach ($citizenships as $citizenship) {
            DB::table('citizenships')->insert(['name' => $citizenship]);
        }
    }
}
