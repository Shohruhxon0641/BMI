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
            'user_id' => $this->faker->numberBetween($min = 1, $max = 50),
            'bino_name' => $this->faker->company,
            'turi' => $this->faker->randomLetter,
            'urindiq_son' => $this->faker->numberBetween($min = 10, $max = 500),
            'narx' => $this->faker->numberBetween($min = 100000, $max = 1000000),
            'viloyat' => $this->faker->state,
            'address' =>$this->faker->address,
            'phone_number' =>$this->faker->e164PhoneNumber,
            'email' => $this->faker->email,
            'cofe_tea' => $this->faker->boolean,
            'sovutish' => $this->faker->boolean,
            'wi_fi' => $this->faker->boolean,
            'hojatxona' => $this->faker->boolean,
            'proyektr' => $this->faker->boolean,
            'ovoz_kuch' =>$this->faker->boolean,
            'kompyuter' => $this->faker->boolean,
            'ovqatlanish' => $this->faker->boolean,
            'image' => $this->faker->imageUrl($width = 640, $height = 480)
        ];
    }
}
