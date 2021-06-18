<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Departamento;
use App\Models\Cargo;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'tipodocumento_id' => '1',
            'departamento_id' => '1',
            'cargo_id' => '1',
            'cedula' => '20391877',
            'name' => 'Juan Jose',
            'slug' => 'juan-jose',
            'last_name' => ' Soto Peña',
            'email' => 'juanjosexdd7@gmail.com',
            'password' => '20391877'
        ]);

        User::create([
            'tipodocumento_id' => '1',
            'departamento_id' => '1',
            'cargo_id' => '1',
            'cedula' => '123456789',
            'name' => 'Admin',
            'slug' => 'admin',
            'last_name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => 'admin'
        ]);

        User::create([
            'tipodocumento_id' => '1',
            'departamento_id' => '1',
            'cargo_id' => '1',
            'cedula' => '12345678',
            'name' => 'Usuario',
            'slug' => 'usuario',
            'last_name' => 'Usuario',
            'email' => 'usuario@mail.com',
            'password' => 'usuario'
        ]);
       // User::factory(99)->create();
    }
}
