<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
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
        return [
            'user_id'=> rand(1,50),
            'title' => $title = $this->faker->text(50),
            'slug' => str_replace(" ","-",$title),
            'body' =>$this->faker->paragraph(rand(5,20)),
            'name' => $this->faker->name,
        ];
    }
}
