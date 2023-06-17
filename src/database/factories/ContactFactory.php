<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'department_id' => Department::factory(),
            'name'=>$this->faker->name(20),
            'email' => $this->faker->email(),
            'content' => $this->faker->realText(200),
            'gender' => $this->faker->numberBetween(1, 3),
            'age' => $this->faker->numberBetween(1, 100),
        ];
    }
}
