<?php

namespace Database\Factories;

use App\Models\Oficina;
use Illuminate\Database\Eloquent\Factories\Factory;

class OficinaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Oficina::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'delegacion_id' => $this->faker->numberBetween(1, 11),
            'tipos_tramite_id' => $this->faker->numberBetween(1,7)
        ];
    }
}
