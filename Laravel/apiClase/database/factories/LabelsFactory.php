<?php

namespace Database\Factories;

use App\Models\Labels;
use Illuminate\Database\Eloquent\Factories\Factory;

class LabelsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Labels::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Define aquí los campos y valores predeterminados para el modelo
            'nombre' => $this->faker->word,
            // Otros campos si los hay
        ];
    }
}
