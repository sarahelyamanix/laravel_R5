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
            'clientName'=> $this->faker->name(),
            'phone'=> $this->faker->phoneNumber(),
            'email'=> $this->faker->unique()->safeEmail(),
            'website'=> $this->faker->Url(),
            'city_id'=> $this->faker->numberBetween(1,20),
            'image' => $this->faker->imageUrl(),
            'active' => $this->faker->boolean,
            'address' => $this->faker->address,
        ];
    }
    

}
