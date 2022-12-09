<?php

namespace Database\Factories;

use App\Models\Modeller;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModellerFactory extends Factory
{
    protected $model = Modller::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->fakeer->name,
            'email' => $this->faker->safeEmail,
            'password' => $this->faker->password,
            'zip' => $this->faker->postcode,
            'prefecture' => $this->faker->state,
            'address' => $this->faker->adress,
            'tel' => $this->faker->phoneNumber,
            
        ];
    }
}
