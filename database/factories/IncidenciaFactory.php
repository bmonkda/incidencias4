<?php

namespace Database\Factories;

use App\Models\Emergency;
use App\Models\Estatu;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class IncidenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence();
        $subcategory = Subcategory::all()->random();

        return [
            'titulo' => $name,
            'slug' => Str::slug($name),
            'descripcion' => $this->faker->text(160),
            'user_id' => User::all()->random()->id,
            
            'subcategory_id' => $subcategory->id,
            // 'subcategory_id' => Subcategory::where('category_id', Category::all()->random()->id),

            'emergency_id' => Emergency::all()->random()->id,
            
            'estatu_id' => Estatu::all()->random()->id,
        ];
    }
}
