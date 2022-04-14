<?php

namespace Database\Seeders;

use App\Enums\SocialEnum;
use App\Models\Staff;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class StaffSeeder extends Seeder
{
    public function run()
    {
        Staff::firstOrCreate([
            'name' => 'Simone',
            'surname' => 'Ungaro'
        ], [
            'img' => Storage::disk('public')->putFile('staff-photos', new File(resource_path('/staff-photos/simo.png'))),
            'role' => 'League Ops',
            'socials' => [
                ['type' => SocialEnum::TWITTER->value, 'url' => 'https://twitter.com/Simoneu01'],
                ['type' => SocialEnum::LINKEDIN->value, 'url' => 'https://www.linkedin.com/in/simone-ungaro-52a738152/']
            ]
        ]);
    }
}
