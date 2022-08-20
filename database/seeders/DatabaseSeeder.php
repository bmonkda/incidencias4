<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Condition;
use App\Models\Level;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call(CategorySeeder::class);
        Category::factory(4)->create();
        Subcategory::factory(50)->create();
        Level::factory(3)->create();
        Condition::factory(4);
        $this->call(UserSeeder::class);
    }
}
