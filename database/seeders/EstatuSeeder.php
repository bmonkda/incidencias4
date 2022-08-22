<?php

namespace Database\Seeders;

use App\Models\Estatu;
use Illuminate\Database\Seeder;

class EstatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estatu = Estatu::create([
            'name' => 'EN ESPERA',
            // 'color' => '#ffc107',
            'color' => 'red-600',
        ]);

        $estatu = Estatu::create([
            'name' => 'ASIGNADA',
            // 'color' => '#28a745',
            'color' => 'gray-500',
        ]);

        $estatu = Estatu::create([
            'name' => 'CERRADA (RESUELTA)',
            // 'color' => '#dc3545',
            'color' => 'indigo-600',
        ]);
        
        $estatu = Estatu::create([
            'name' => 'CERRADA (NO RESUELTA)',
            // 'color' => '#dc3545',
            'color' => 'gray-800',
        ]);
    }
}
