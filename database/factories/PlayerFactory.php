<?php

namespace Database\Factories;

use App\Enums\SocialEnum;
use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    protected $model = Player::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'nickname' => $this->faker->userName(),
            'img' => $this->faker->word(),
            'nationality' => $this->faker->word(),
            'current_team_id' => null,
            'socials' => [
                ['type' => SocialEnum::TWITTER->value, 'url' => $this->faker->url()],
            ],
            'user_id' => null
        ];
    }
}
