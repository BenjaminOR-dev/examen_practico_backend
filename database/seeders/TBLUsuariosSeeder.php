<?php

namespace Database\Seeders;

use App\Models\TBLUsuarios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TBLUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TBLUsuarios::create([
            'nombre' => 'Benjamín',
            'paterno' => 'Olvera',
            'materno' => 'Rosales',
            'login' => 'weetripod',
            'password' => bcrypt('hola123')
        ]);
    }
}
