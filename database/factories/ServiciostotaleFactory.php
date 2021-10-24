<?php

namespace Database\Factories;

use App\Models\Serviciostotale;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiciostotaleFactory extends Factory
{
    protected $model = Serviciostotale::class;

    public function definition()
    {
        return [
			'nombre' => $this->faker->name,
			'idarea' => $this->faker->name,
        ];
    }
}
