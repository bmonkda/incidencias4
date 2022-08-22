<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // borrado y creación del directorio storage/app/public/incidencias
        
        Storage::deleteDirectory('incidencias');
        Storage::makeDirectory('incidencias');
        
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        Category::factory(4)->create();
        // Modo::factory(4)->create();
        Subcategory::factory(12)->create();

        $this->call(EmergencySeeder::class);

        $this->call(EstatuSeeder::class);
        
        $this->call(IncidenciaSeeder::class);
    }
}
