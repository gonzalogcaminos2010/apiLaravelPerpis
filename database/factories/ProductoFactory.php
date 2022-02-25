<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'nombre' => $this->faker->sentence(),
            'descripcion' => $this->sentence(),
            'precio'=> $this -> price(),
            'image' => $this -> imageUrl(1280,720),

            //
        ];
    }
}
