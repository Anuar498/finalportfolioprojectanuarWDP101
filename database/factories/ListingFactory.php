<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'room' => $this->faker->word,
            'checkin' => $this->faker->dateTimeBetween('now', '+1 week')->format('Y-m-d H:i:s'),
            'checkout' => $this->faker->dateTimeBetween('+1 week', '+2 weeks')->format('Y-m-d H:i:s'),
            'price' => $this->faker->randomFloat(2, 50, 500), // Example: Price between 50 and 500
            'tags' => $this->faker->words(3, true), // Random 3 tags
            'accommodations' => $this->faker->numberBetween(1, 100),
            'members' => $this->faker->numberBetween(1, 100),
            'email' => $this->faker->unique()->safeEmail,
            'youremail' => $this->faker->safeEmail,
            'fullname' => $this->faker->name,
            'name' => $this->faker->name,
            'phonenumber' => $this->faker->phoneNumber,
            'contactnumber' => $this->faker->phoneNumber,
            'location' => $this->faker->city,
            'address' => $this->faker->city,

        ];
    }
}
