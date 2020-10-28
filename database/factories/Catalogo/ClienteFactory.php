<?php

namespace Database\factories\catalogo;

use App\Models\catalogo\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'correo' => $this->faker->email,
            'empresa' => $this->faker->company
        ];
    }
}
