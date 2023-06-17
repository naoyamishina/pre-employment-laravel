<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    private static int $sequence = 1;
    public function definition()
    {
        return [
            'name'=>'部署'.self::$sequence++,
            'manager_name'=>$this->faker->name(20)
        ];
    }
}
