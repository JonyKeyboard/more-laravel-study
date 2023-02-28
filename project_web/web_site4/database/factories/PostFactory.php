<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    // protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->paragraph(1);
        return [
            'uri' => Str::slug($title),
            'title' => $title,
            'subtitle' => $this->faker->paragraph(1),
            'content' => $this->faker->paragraph(10),
            'author' => 1,
        ];
    }
}
