<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Category::class;
    public function definition()
    {
        return [
            // tao mot tieu de gom cac chu ngau nhie tu 5 den 10
            'title'=> $this ->faker ->word(rand(5, 15), true),
            // tao ngau nhieu gia tri true hoac false cho cot is_active
            'is_active'=>$this->faker->randomElement([true,false])
        ];
    }
}
