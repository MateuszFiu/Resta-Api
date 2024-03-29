<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\people>
 */
class peopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
            'surname'=>$this->faker->lastname(),
            'phonenumber'=>$this->faker->phoneNumber(),
            'street'=>$this->faker->streetAddress(),
            'city'=>$this->faker->city(),
            
        ];
    }
}
