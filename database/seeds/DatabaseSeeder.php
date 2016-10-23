<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'mfranco87@gmail.com',
            'password' => bcrypt('mfranco.87'),
        ]);
        DB::table('headers')->insert([
            'headerContent' => '<h1>Texto de cabecera de prueba<h1>
                                 <p>parrafo1</p>',
        ]);
        DB::table('conditions')->insert([
            'conditionContent' => '<h1>Texto de condiciones de prueba<h1>
                                 <p>parrafo1</p>',
        ]);
        DB::table('tecnologies')->insert([
          'nombre'=>'PHP',
          'activo'=>1
        ]);
    }
}
