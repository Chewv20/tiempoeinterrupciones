<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Lineas;
use App\Models\Meses;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = new User;
        $user -> name = 'Administrador';
        $user -> username = 'admin';
        $user -> password = '12345';
        $user ->save();
        
        Lineas::create([
            'id_linea' => '01',
            'linea' => 'Línea 1',
        ]);
        Lineas::create([
            'id_linea' => '02',
            'linea' => 'Línea 2',
        ]);
        Lineas::create([
            'id_linea' => '03',
            'linea' => 'Línea 3',
        ]);
        Lineas::create([
            'id_linea' => '04',
            'linea' => 'Línea 4',
        ]);
        Lineas::create([
            'id_linea' => '05',
            'linea' => 'Línea 5',
        ]);
        Lineas::create([
            'id_linea' => '06',
            'linea' => 'Línea 6',
        ]);
        Lineas::create([
            'id_linea' => '07',
            'linea' => 'Línea 7',
        ]);
        Lineas::create([
            'id_linea' => '08',
            'linea' => 'Línea 8',
        ]);
        Lineas::create([
            'id_linea' => '09',
            'linea' => 'Línea 9',
        ]);
        Lineas::create([
            'id_linea' => '12',
            'linea' => 'Línea 12',
        ]);
        Lineas::create([
            'id_linea' => 'LA',
            'linea' => 'Línea A',
        ]);
        Lineas::create([
            'id_linea' => 'LB',
            'linea' => 'Línea B',
        ]);
        
        Meses::create([
            'mes' => 'Enero'
        ]);
        Meses::create([
            'mes' => 'Febrero'
        ]);
        Meses::create([
            'mes' => 'Marzo'
        ]);
        Meses::create([
            'mes' => 'Abril'
        ]);
        Meses::create([
            'mes' => 'Mayo'
        ]);
        Meses::create([
            'mes' => 'Junio'
        ]);
        Meses::create([
            'mes' => 'Julio'
        ]);
        Meses::create([
            'mes' => 'Agosto'
        ]);
        Meses::create([
            'mes' => 'Septiembre'
        ]);
        Meses::create([
            'mes' => 'Octubre'
        ]);
        Meses::create([
            'mes' => 'Noviembre'
        ]);
        Meses::create([
            'mes' => 'Diciembre'
        ]);

    }
}
