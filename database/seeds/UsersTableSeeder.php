<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
          'nombre' => 'laravel',
          'correo' => 'laravel@gmail.com',
          'password' => bcrypt('laravel'),
          'tipo' => 1,
          'activo' => 1,
          'telefono' => 9988121212,
        ]);

        DB::table('users')->insert([
          'name' => 'laravel',
          'email' => 'laravel@gmail.com',
          'password' => bcrypt('laravel'),
        ]);
    }
}
