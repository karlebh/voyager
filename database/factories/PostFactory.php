<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;

        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title'    => $title,
            'slug' => trim(Str::limit(Str::slug($title, ''), 50)),
            'content' => $this->faker->text,
        ];
    }
}
