<?php

namespace Database\Factories\registro;

use App\Models\registro\Asignacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsignacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Asignacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(2, 5),
            'cliente_id' => rand(1, 10),
            'programa_id' => rand(1, 5),
            'fecha_pagado' => $this->faker->dateTimeThisYear,
            'fecha_vence' => $this->faker->dateTimeThisYear,
        ];
    }
}
