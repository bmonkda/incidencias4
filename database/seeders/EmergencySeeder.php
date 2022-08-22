<?php

namespace Database\Seeders;

use App\Models\Emergency;
use Illuminate\Database\Seeder;

class EmergencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emergency = Emergency::create([
            'name' => 'BAJA',
        ]);

        $emergency = Emergency::create([
            'name' => 'MEDIA',
        ]);

        $emergency = Emergency::create([
            'name' => 'ALTA',
        ]);
    }
}
