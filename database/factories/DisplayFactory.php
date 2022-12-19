<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DisplayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * 
    
     */

    

    protected $model = Modeller::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'price' => $this->faker->numberBetween(1,100),
        ];
    }
}
