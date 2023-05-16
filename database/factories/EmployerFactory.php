<?php

namespace Database\Factories;
use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Utilisateur::class;
    public function definition(): array
    {
        return [
            //
            'identifiant' => $this->faker->unique()->userName(),
            'password' => bcrypt('password'),
            'type' => $this->faker->randomElement(['Employer', 'Commercial']),

        ];
    }
}
