<?php

namespace Database\Seeders;

use App\Enums\SocialEnum;
use App\Models\Staff;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class StaffSeeder extends Seeder
{
    public function run()
    {
        Staff::firstOrCreate([
            'name' => 'Simone',
            'surname' => 'Ungaro',
        ], [
            'img' => Storage::disk('public')->putFile('staff-photos', new File(resource_path('/staff-photos/simo.png'))),
            'role' => 'CEO & League Ops',
            'socials' => [
                ['type' => SocialEnum::TWITTER->value, 'url' => 'https://twitter.com/Simoneu01'],
                ['type' => SocialEnum::LINKEDIN->value, 'url' => 'https://www.linkedin.com/in/simone-ungaro-52a738152/'],
            ],
        ]);
    }
}
