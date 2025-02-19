<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TCGCardFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'franchise' => $this->faker->company(),
            'collection' => $this->faker->company(),
            'price' => $this->faker->numberBetween($min = 100, $max = 1000000),
            'PSAgrade' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10']),
            'image' => $this->faker->imageUrl(),
            'launchDate' => $this->faker->date(),
            'rarity' => $this->faker->randomElement(['common', 'uncommon', 'rare', 'mythic']),
            'pullRate' => $this->faker->randomFloat(2, 0, 1),
            'language' => $this->faker->randomElement(['english', 'spanish']),
            'stock' => $this->faker->randomNumber()
        ];
    }
}
