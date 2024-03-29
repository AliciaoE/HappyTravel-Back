<?php

namespace Database\Factories;

use App\Models\Trips;
use Illuminate\Database\Eloquent\Factories\Factory;

class TripsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Trips::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'location' => $this->faker->city,
            'image' => 'path/to/your/image.jpg', 
            'description' => $this->faker->paragraph,
        ];
    }
}