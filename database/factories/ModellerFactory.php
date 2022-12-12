<?php

namespace Database\Factories;

use App\Models\Modeller;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModellerFactory extends Factory


{
    protected $model = Modeller::class;
    /**
     * Define the model's default state.
     *@var string

     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'password' => $this->faker->password,
            'zip' => $this->faker->postcode,
            'prefecture' => $this->faker->state,
            'address' => $this->faker->address,
            'tel' => $this->faker->phoneNumber,

        ];
    }
}
