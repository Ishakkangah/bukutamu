<?php

namespace Database\Factories;

use App\Models\bukutamu;
use Carbon\Carbon;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

class BukutamuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>  $this->faker->name(),
            'thumbnail' => '',
            'instansi' => $this->faker->company(),
            'perihal' => $this->faker->name(),
            'tujuan' => $this->faker->text(),
            'keterangan' => $this->faker->text(),
            'created_at' => Carbon::now()
        ];

        bukutamu::factory()->count(123)->create();
    }
}
