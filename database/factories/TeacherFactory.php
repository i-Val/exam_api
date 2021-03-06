<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'role' => 'teacher',
            'id_number' => $this->faker->unique()->randomDigit,
            'class' => 'ss2',
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt(1234), // password
            'remember_token' => Str::random(10),
        ];
    }
}
