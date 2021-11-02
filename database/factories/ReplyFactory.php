<?php

namespace Database\Factories;

use App\Models\Reply;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReplyFactory extends Factory
{
    protected $model = Reply::class;

    public function definition()
    {
        return [
            'topic_id' => rand(1, 100),
            'user_id' => rand(1, 10),
            'content' => $this->faker->sentence()
        ];
    }
}
