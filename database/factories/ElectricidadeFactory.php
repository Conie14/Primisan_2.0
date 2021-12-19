<?php

namespace Database\Factories;

use App\Models\Electricidade;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ElectricidadeFactory extends Factory
{
    protected $model = Electricidade::class;

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
