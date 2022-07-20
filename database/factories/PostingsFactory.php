<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Postings>
 */
class PostingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
           'title'=>$this->faker->company(),
           'address'=>$this->faker->address(),
           'requirements'=>$this->faker->paragraph(4),
           'user_id'=>$this->faker->numberBetween(1, 50),
           'category_id'=>$this->faker->numberBetween(1, 3),

        ];
    }
}