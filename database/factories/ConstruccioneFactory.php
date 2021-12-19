<?php

namespace Database\Factories;

use App\Models\Construccione;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ConstruccioneFactory extends Factory
{
    protected $model = Construccione::class;

    public function definition()
    {
        return [
			'nombre' => $this->faker->name,
			'email' => $this->faker->name,
			'telefono' => $this->faker->name,
			'servicio' => $this->faker->name,
			'mensaje' => $this->faker->name,
			'idservicio' => $this->faker->name,
        ];
    }
}
