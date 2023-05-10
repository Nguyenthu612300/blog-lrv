<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Post::class;
    public function definition()
    {
        return [
            'title'=> $this ->faker ->word(rand(5, 15), true),
            'is_active'=>$this->faker->randomElement([true,false]),
            'slide_url'=>$this ->faker ->url(),
            'content'=>$this ->faker ->paragraph(1),
            'category_id'=>$this->faker->randomNumber(1, 10)
        ];
    }
}
