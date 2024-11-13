<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([[
            'nombre'=>'Juan',
            'apellido'=>'Perex',
            'correo'=>'Juan@gmail.com',
            'telefono'=>'+1237894560',
        ],[
            'nombre'=>'Pedro',
            'apellido'=>'Ramírez',
            'correo'=>'Pedro@hotmail.com',
            'telefono'=>'+5678901234',
        ],[
            'nombre'=>'Maria',
            'apellido'=>'García',
            'correo'=>'Maria@yahoo.com',
            'telefono'=>'+9876543210',
        ]
    ]);
    }
}
