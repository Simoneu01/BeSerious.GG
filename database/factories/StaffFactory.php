<?php

namespace Database\Factories;

use App\Enums\SocialEnum;
use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class StaffFactory extends Factory
{
    protected $model = Staff::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'surname' => $this->faker->word(),
            'role' => $this->faker->word(),
            'img' => $this->faker->word(),
            'socials' => [
                ['type' => SocialEnum::TWITTER->value, 'url' => $this->faker->url()],
            ],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
