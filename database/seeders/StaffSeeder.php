<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    public function run()
    {
        Staff::firstOrCreate([
            'name' => 'Simone',
            'surname' => 'Ungaro'
        ], [
            'img' => 'asd',
            'role' => 'League Ops',
            'socials' => [
                ['name' => 'twitter', 'url' => 'https://twitter.com/Simoneu01'],
                ['name' => 'linkedin', 'url' => 'https://www.linkedin.com/in/simone-ungaro-52a738152/']
            ]
        ]);
    }
}
