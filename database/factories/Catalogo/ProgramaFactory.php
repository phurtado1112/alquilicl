<?php

namespace Database\Factories\catalogo;

use App\Models\catalogo\Programa;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Programa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_programa' => $this->faker->name,
            'versión_programa' => $this->faker->numberBetween(1, 5),
            'licencia_total' => $this->faker->numberBetween(1,5),
            'licencia_asignada' => $this->faker->numberBetween(0,3),
            'licencia_libre' => $this->faker->numberBetween(0,3),
        ];
    }
}
