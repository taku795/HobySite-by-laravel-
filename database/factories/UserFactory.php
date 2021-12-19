<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Content;
use App\Models\User;

class UserFactory extends Factory
{
    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>$this->faker->userName(),
            'user_password'=>$this->faker->password(),
            'user_name'=>$this->faker->name()
        ];
    }
}
