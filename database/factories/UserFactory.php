<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
<<<<<<< HEAD
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
=======
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'name' => function (array $attributes) {
                return "{$attributes['firstname']} {$attributes['lastname']}";
            },
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'avatar_url' => $this->faker->imageUrl(200, 200, 'people', true, 'User'),
            'email_verified_at' => now(),
            'cpf' => $this->faker->unique()->numerify('###.###.###-##'),
            'birthdate' => $this->faker->dateTimeBetween('-65 years', '-8 years')->format('Y-m-d'),
            'city' => $this->faker->city,
            'state' => $this->faker->stateAbbr,
            'password' => bcrypt('password'),
>>>>>>> origin/main
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
