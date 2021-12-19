<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Content;
use App\Models\User;

class ContentFactory extends Factory
{
    protected $model = Content::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::factory()->create();
        return [
            'user_id'=>$user->user_id,
            'title'=>$this->faker->realText(15),
            'content'=>$this->faker->realText(),
            'day'=>$this->faker->dateTime()
        ];
    }
}
