<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $index = 0;
        return [
            'encyclopedia_cat_id' => rand(1, 10),
            'encyclopedia_sub_cat_id' => rand(1, 10),
            'question' => 'السؤال '.++$index,
            'email' => $this->faker->safeEmail,
            'code' => rand(),
            'is_read' => rand(1,2),
        ];
    }
}
