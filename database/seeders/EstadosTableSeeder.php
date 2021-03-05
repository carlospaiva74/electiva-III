<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('estados')->insert(array(
        	'estado' => 'Amazonas'
        ));
        \DB::table('estados')->insert(array(
        	'estado' => 'Anzoátegui'
        ));
        \DB::table('estados')->insert(array(
        	'estado' => 'Apure'
        ));
        \DB::table('estados')->insert(array(
        	'estado' => 'Aragua'
        ));
        \DB::table('estados')->insert(array(
        	'estado' => 'Barinas'
        ));
        \DB::table('estados')->insert(array(
        	'estado' => 'Bolívar'
        ));
        \DB::table('estados')->insert(array(
        	'estado' => 'Carabobo'
        ));
        \DB::table('estados')->insert(array(
        	'estado' => 'Cojedes'
        ));
        \DB::table('estados')->insert(array(
        	'estado' => 'Delta Amacuro'
        ));
        \DB::table('estados')->insert(array(
        	'estado' => 'Distrito Capital'
        ));
        \DB::table('estados')->insert(array(
        	'estado' => 'Falcón'
        ));
        \DB::table('estados')->insert(array(
        	'estado' => 'Guárico'
        ));
        \DB::table('estados')->insert(array(
        	'estado' => 'Lara'
        ));
        \DB::table('estados')->insert(array(
        	'estado' => 'Mérida'
        ));
        \DB::table('estados')->insert(array(
        	'estado' => 'Miranda'
        ));
        \DB::table('estados')->insert(array(
            'estado' => 'Monagas'
        ));
        \DB::table('estados')->insert(array(
        	'estado' => 'Nueva Esparta'
        ));
        \DB::table('estados')->insert(array(
        	'estado' => 'Portuguesa'
        ));
        \DB::table('estados')->insert(array(
        	'estado' => 'Sucre'
        ));
        \DB::table('estados')->insert(array(
        	'estado' => 'Táchira'
        ));
        \DB::table('estados')->insert(array(
        	'estado' => 'Trujillo'
        ));
        \DB::table('estados')->insert(array(
        	'estado' => 'Vargas'
        ));
        \DB::table('estados')->insert(array(
        	'estado' => 'Yaracuy'
        ));
        \DB::table('estados')->insert(array(
        	'estado' => 'Zulia'
        ));
    }
}
