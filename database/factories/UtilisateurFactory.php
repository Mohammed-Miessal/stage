<?php

namespace Database\Factories;
use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Utilisateur>
 */
class UtilisateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'identifiant' => $this->faker->unique()->userName(),
            'password' => $this->faker->regexify('[A-Za-z0-9]{6}'),
            'type' => $this->faker->randomElement(['Employer', 'Commercial']),
        ];
    }
}
