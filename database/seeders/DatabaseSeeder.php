<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('clientes')->insert([
            ['nome' => 'Gabriel Coimbra',  'idade' => 22,'saldo' => 320, 'sexo' => 'Masculino'],
            ['nome' => 'Paulo Saraiva',  'idade' => 45,'saldo' => 33.52, 'sexo' => 'Masculino'],
            ['nome' => 'Lucas',  'idade' => 45,'saldo' => 33.52, 'sexo' => 'Masculino'],
            ['nome' => 'Arthur',  'idade' => 32,'saldo' => 338.52, 'sexo' => 'Masculino'],
            ['nome' => 'Léo',  'idade' => 35,'saldo' => 3158.52, 'sexo' => 'Masculino'],
        
        ]);
    }
}
