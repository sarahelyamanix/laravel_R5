<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'clientName'=> $this->faker->sentence(),
            'phone'=> $this->faker->phoneNumber(),
            'email'=> $this->faker->unique()->safeEmail(),
            'website'=> $this->faker->sentence(),
            'image' => $this->faker->imageUrl(),
            'city' => $this->faker->city,
            'active' => $this->faker->boolean, 
        ];
    }
    

}
