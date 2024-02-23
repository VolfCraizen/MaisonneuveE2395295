<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->name,
            'adresse' => $this->faker->name,
            //Ref: https://laracasts.com/discuss/channels/laravel/how-can-i-get-a-10-digit-faker-random-number 
            //Credit va à Nav
            'telephone' => $this->faker->numerify('###-###-####'),
            'email' => $this->faker->unique->safeEmail,
            //Ref: https://fakerphp.github.io/formatters/date-and-time/
            'date_de_naissance' => $this->faker->date('Y_m_d'),
            //Ref: https://laracasts.com/discuss/channels/laravel/factory-with-a-foreign-key
            //Credit va à viper75x
            'ville_id' => \App\Models\Ville::inRandomOrder()->first()->id
        ];
    }
}
