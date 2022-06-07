<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    //  protected $model = Room::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'address' =>$this->faker->address,
            'phone' =>$this->faker->e164PhoneNumber
        ];
    }
}
