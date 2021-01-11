<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        return [
            'sname' => $this->faker->name,
            'sfname' => $this->faker->firstNameMale.' '.$this->faker->lastName,
            'smname' => $this->faker->firstNameFemale.' '.$this->faker->lastName,
            'gender' => $gender,
            'roll' => $this->faker->unique()->numberBetween(1, 200),
            'section' => $this->faker->numberBetween(1, 2),
            'class' => $this->faker->numberBetween(6, 10),
            'address' => $this->faker->address,
        ];
    }
}
