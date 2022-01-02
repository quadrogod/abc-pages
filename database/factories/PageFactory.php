<?php

namespace Quadrogod\Abc\Shop\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name();
        return [
            'name' => $name,
            'title' => $name,
            'url' => Str::uuid(),
            'display' => true,
            'text' => $this->faker->text(),
        ];
    }
}
