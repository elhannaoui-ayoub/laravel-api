<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topicality>
 */
class TopicalityFactory extends Factory
{
    protected $model = \app\Models\Topicality::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(6,true),
            'content' => $this->faker->sentence(3,true)
        ];
    }
}
