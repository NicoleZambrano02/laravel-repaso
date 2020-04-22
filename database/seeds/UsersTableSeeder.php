<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla
        User::truncate();

        //la misma clave para todos los usuarios
        $faker = \Faker\Factory::create();
        $password = Hash::make('123456');

        //Crear artículos ficticios en la tabla
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@prueba.com',
            'password' => $password,
        ]);

        for ($i = 0; $i < 10; $i++){
            User::create([
                'name' => $faker -> name,
                'email' => $faker -> email,
                'password' => $faker -> password,
            ]);
        }
    }
}
