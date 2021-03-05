<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ParroquiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    	{
                 //--- de Amazonas
        	//--- del alto orinoco
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 1,
	        	'parroquia' => 'Alto Orinoco'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 1,
	        	'parroquia' => 'Huachamacare Acañaña'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 1,
	        	'parroquia' => 'Marawaka Toky Shamanaña'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 1,
	        	'parroquia' => 'Mavaka Mavaka'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 1,
	        	'parroquia' => 'Sierra Parima Parimabé'
	        ));
        	//-- de atabapo
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 2,
	        	'parroquia' => 'Atabapo de San Fernándo de Atabapo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 2,
	        	'parroquia' => 'Ucata Laja Lisa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 2,
	        	'parroquia' => 'Yapacana Macuruco'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 2,
	        	'parroquia' => 'Caname Guarinuma'
	        ));
	        //--- de Atures
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 3,
	        	'parroquia' => 'Fernándo Girón Tovar Puerto Ayacucho'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 3,
	        	'parroquia' => 'Luis Alberto Gomez Puerto Ayacucho'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 3,
	        	'parroquia' => 'Pahueña Limón de Parhueña'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 3,
	        	'parroquia' => 'Platanillal Platanillal'
	        ));
	        //--- de autana
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 4,
	        	'parroquia' => 'Samariapo Samariapo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 4,
	        	'parroquia' => 'Sipapo Pendare'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 4,
	        	'parroquia' => 'Munduapo Munduapo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 4,
	        	'parroquia' => 'Guayapo San Pedro del Orinoco'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 4,
	        	'parroquia' => 'Isla Ratón'
	        ));
	        //--- de manapiare
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 5,
	        	'parroquia' => 'Alto Ventuari Cacurí'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 5,
	        	'parroquia' => 'Medio Ventuari Manami'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 5,
	        	'parroquia' => 'Bajo Ventuari Marueta'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 5,
	        	'parroquia' => 'Manapiare San Juan de Manapiare'
	        ));
	        //--- de Maroa
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 6,
	        	'parroquia' => 'Maroa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 6,
	        	'parroquia' => 'Victorino'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 6,
	        	'parroquia' => 'Comunidad'
	        ));
	        //---- de Rio negro
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 7,
	        	'parroquia' => 'Casaquiare Curimacare'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 7,
	        	'parroquia' => 'Cocuy'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 7,
	        	'parroquia' => 'San Carlos de Río Negro'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 7,
	        	'parroquia' => 'Solano Solano'
	        ));
	//----de anzoategui
	    //--- de anaco
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 8,
	        	'parroquia' => 'Anaco'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 8,
	        	'parroquia' => 'San Joaquín'
	        ));
	    //--- de aragua
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 9,
	        	'parroquia' => 'Cachipo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 9,
	        	'parroquia' => 'Aragua de Barcelona'
	        ));
	    //--- de simon bolivar
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 10,
	        	'parroquia' => 'Bergantín'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 10,
	        	'parroquia' => 'Caigua'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 10,
	        	'parroquia' => 'El Carmen'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 10,
	        	'parroquia' => 'El Pilar'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 10,
	        	'parroquia' => 'Naricual'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 10,
	        	'parroquia' => 'San Cristóbal'
	        ));
	    // --- de bruzual
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 11,
	        	'parroquia' => 'Clarines'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 11,
	        	'parroquia' => 'Guanape'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 11,
	        	'parroquia' => 'Sabana de Uchire'
	        ));
	    //--- de cajigal
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 12,
	        	'parroquia' => 'Onoto'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 12,
	        	'parroquia' => 'San Pablo'
	        ));
	    //---- de carvajal
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 13,
	        	'parroquia' => 'Valle de Guanape'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 13,
	        	'parroquia' => 'Santa Bárbara'
	        ));
	    //--- diego bautista urbaneja
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 14,
	        	'parroquia' => 'Lechería'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 14,
	        	'parroquia' => 'EL Morro'
	        ));
	    //--- freites
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 15,
	        	'parroquia' => 'Cantaura'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 15,
	        	'parroquia' => 'Libertador'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 15,
	        	'parroquia' => 'Santa Rosa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 15,
	        	'parroquia' => 'Urica'
	        ));
	    //--- de guanipa
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 16,
	        	'parroquia' => 'San José de Guanipa'
	        ));
	    //--- de guanta
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 17,
	        	'parroquia' => 'Guanta'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 17,
	        	'parroquia' => 'Chorrerón'
	        ));
	    //--- de independencia
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 18,
	        	'parroquia' => 'Mamo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 18,
	        	'parroquia' => 'Soledad'
	        ));
	    //--- de libertad
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 19,
	        	'parroquia' => 'San Mateo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 19,
	        	'parroquia' => 'El Carito'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 19,
	        	'parroquia' => 'Santa Inés'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 19,
	        	'parroquia' => 'La Romereña'
	        ));
	    //---- de mcgregor
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 20,
	        	'parroquia' => 'El Chaparro'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 20,
	        	'parroquia' => 'Tomás Alfaro'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 20,
	        	'parroquia' => 'Calatrava'
	        ));
	    //--- miranda
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 21,
	        	'parroquia' => 'Atapirire'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 21,
	        	'parroquia' => 'Boca del Pao'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 21,
	        	'parroquia' => 'El Pao'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 21,
	        	'parroquia' => 'Pariaguán'
	        ));
	    //----monagas
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 22,
	        	'parroquia' => 'Mapire'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 22,
	        	'parroquia' => 'Piar'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 22,
	        	'parroquia' => 'Santa Clara'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 22,
	        	'parroquia' => 'San Diego de Cabrutica'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 22,
	        	'parroquia' => 'Uverito'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 22,
	        	'parroquia' => 'Zuata'
	        ));
	    //--- fernando peñalver
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 23,
	        	'parroquia' => 'Puerto Píritu'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 23,
	        	'parroquia' => 'San Miguel'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 23,
	        	'parroquia' => 'Sucre'
	        ));
	    //---- de piritu
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 24,
	        	'parroquia' => 'Píritu'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 24,
	        	'parroquia' => 'San Francisco'
	        ));
	    //---- de capistrano
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 25,
	        	'parroquia' => 'Boca de Uchire'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 25,
	        	'parroquia' => 'Boca de Chávez'
	        ));
	    //--- de santa ana
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 26,
	        	'parroquia' => 'Pueblo Nuevo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 26,
	        	'parroquia' => 'Santa Ana'
	        ));
	    //-- de simon rodriguez
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 27,
	        	'parroquia' => 'Edmundo Barrios'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 27,
	        	'parroquia' => 'Miguel Otero Silva'
	        ));
	    //--- de sotillo
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 28,
	        	'parroquia' => 'Puerto la Cruz'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 28,
	        	'parroquia' => 'Pozuelos'
	        ));
	//--- de apure
	    //--- de achaguas
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 29,
	        	'parroquia' => 'Achaguas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 29,
	        	'parroquia' => 'Apurito'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 29,
	        	'parroquia' => 'El Yagual'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 29,
	        	'parroquia' => 'Guachara'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 29,
	        	'parroquia' => 'Mucuritas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 29,
	        	'parroquia' => 'Queseras del Medio'
	        ));
	    //--- de biruaca
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 30,
	        	'parroquia' => 'Biruaca'
	        ));
	    //--- de muñoz
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 31,
	        	'parroquia' => 'bruzual'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 31,
	        	'parroquia' => 'Mantecal'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 31,
	        	'parroquia' => 'Quintero'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 31,
	        	'parroquia' => 'Rincón Hondo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 31,
	        	'parroquia' => 'San Vicente'
	        ));
	    //--- de paez
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 32,
	        	'parroquia' => 'Guasdalito'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 32,
	        	'parroquia' => 'Aramendi'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 32,
	        	'parroquia' => 'El Amparo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 32,
	        	'parroquia' => 'San Camilo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 32,
	        	'parroquia' => 'Urdaneta'
	        ));
	    //--- de camejo
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 33,
	        	'parroquia' => 'San Juan de Payara'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 33,
	        	'parroquia' => 'Codazzi'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 33,
	        	'parroquia' => 'Cunaviche'
	        ));
	    //---- de romulo gallegos
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 34,
	        	'parroquia' => 'Elorza'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 34,
	        	'parroquia' => 'La Trinidad'
	        ));
	    //--- de san fernando
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 35,
	        	'parroquia' => 'San Fernándo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 35,
	        	'parroquia' => 'El Recreo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 35,
	        	'parroquia' => 'Peñalver'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 35,
	        	'parroquia' => 'San Rafaél de Atamaica'
	        ));
	//--- de aragua
	    // de bolivar
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 36,
	        	'parroquia' => 'Bolívar'
	        ));
	    //--- de camatagua
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 37,
	        	'parroquia' => 'Camatagua'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 37,
	        	'parroquia' => 'Carmen de Cura'
	        ));
	    //--- de alcantara
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 38,
	        	'parroquia' => 'Santa Rita'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 38,
	        	'parroquia' => 'Francisco de Miranda'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 38,
	        	'parroquia' => 'Monseñor Feliciano González'
	        ));
	    //-- de girardot
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 39,
	        	'parroquia' => 'Pedro José Ovalles'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 39,
	        	'parroquia' => 'Joaquín Crespo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 39,
	        	'parroquia' => 'José Casanova Godoy'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 39,
	        	'parroquia' => 'Madre María de San José'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 39,
	        	'parroquia' => 'Andrés Eloy Blanco'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 39,
	        	'parroquia' => 'Los Tacariguas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 39,
	        	'parroquia' => 'Las Delicias'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 39,
	        	'parroquia' => 'Choroní'
	        ));
	    //--- de lamas
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 40,
	        	'parroquia' => 'Santa Cruz'
	        ));
	    //--- de ribas
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 41,
	        	'parroquia' => 'José Félix Ribas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 41,
	        	'parroquia' => 'Castor Nieves Ríos'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 41,
	        	'parroquia' => 'Las Guacamayas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 41,
	        	'parroquia' => 'Pao de Zárate'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 41,
	        	'parroquia' => 'Zuata'
	        ));
	    //--- de revenga
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 42,
	        	'parroquia' => 'José Rafaél Revenga'
	        ));
	    //--- de libertador
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 43,
	        	'parroquia' => 'Palo Negro'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 43,
	        	'parroquia' => 'San Martín de Porres'
	        ));
	    //-- de briceño
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 44,
	        	'parroquia' => 'El Limón'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 44,
	        	'parroquia' => 'Caña de Azúcar'
	        ));
	    //--- de ocumare
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 45,
	        	'parroquia' => 'Ocumare de la Costa'
	        ));
	    //--- de san casimiro
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 46,
	        	'parroquia' => 'San Casimiro'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 46,
	        	'parroquia' => 'Güiripa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 46,
	        	'parroquia' => 'Ollas de Caramacate'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 46,
	        	'parroquia' => 'Valle Morín'
	        ));
	    //--- de san sebastian
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 47,
	        	'parroquia' => 'San Sebastián'
	        ));
	    //-- de mariño
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 48,
	        	'parroquia' => 'Turmero'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 48,
	        	'parroquia' => 'Arévalo Aponte'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 48,
	        	'parroquia' => 'Chuao'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 48,
	        	'parroquia' => 'Samán de Güere'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 48,
	        	'parroquia' => 'Alfredo Pacheco Miranda'
	        ));
	    //---- de michelena
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 49,
	        	'parroquia' => 'Santos Michelena'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 49,
	        	'parroquia' => 'Tiara'
	        ));
	    //--- de sucre
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 50,
	        	'parroquia' => 'Cagua'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 50,
	        	'parroquia' => 'Bela Vista'
	        ));
	    //--- de tovar
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 51,
	        	'parroquia' => 'Tovar'
	        ));
	    //--- de urdaneta
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 52,
	        	'parroquia' => 'Urdaneta'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 52,
	        	'parroquia' => 'Las Peñitas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 52,
	        	'parroquia' => 'San Francisco de Cara'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 52,
	        	'parroquia' => 'Taguay'
	        ));
	    //--- de zamora
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 53,
	        	'parroquia' => 'Villa de Cura'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 53,
	        	'parroquia' => 'Magdaleno'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 53,
	        	'parroquia' => 'San Francisco de Asís'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 53,
	        	'parroquia' => 'Valles de Tucutunemo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 53,
	        	'parroquia' => 'Augusto Mijares'
	        ));
	//--- de barinas
	    //--- de torrealba
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 54,
	        	'parroquia' => 'Sabaneta'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 54,
	        	'parroquia' => 'Juan Antonio Rodríguez Dominguez (Veguitas)'
	        ));
	    //--- de eloy
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 55,
	        	'parroquia' => 'El Cantón'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 55,
	        	'parroquia' => 'Santa Cruz de Guacas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 55,
	        	'parroquia' => 'Puerto Vivas'
	        ));
	    //--- de sucre
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 56,
	        	'parroquia' => 'Ticoporo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 56,
	        	'parroquia' => 'Nicolás Pulido'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 56,
	        	'parroquia' => 'Andrés Bello'
	        ));
	    //--- de arismendi
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 57,
	        	'parroquia' => 'Arismendi'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 57,
	        	'parroquia' => 'Guadarrama'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 57,
	        	'parroquia' => 'La Unión'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 57,
	        	'parroquia' => 'San Antonio'
	        ));
	    //-- de barinas
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 58,
	        	'parroquia' => 'Barinas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 58,
	        	'parroquia' => 'Alberto Arvelo Larriva'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 58,
	        	'parroquia' => 'San Silvestre'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 58,
	        	'parroquia' => 'Santa Inés'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 58,
	        	'parroquia' => 'Santa Lucía'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 58,
	        	'parroquia' => 'Torunos'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 58,
	        	'parroquia' => 'El Carmen'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 58,
	        	'parroquia' => 'Rómulo Betancourt'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 58,
	        	'parroquia' => 'Corazón de Jesús'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 58,
	        	'parroquia' => 'Ramón Ignacio Mendez'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 58,
	        	'parroquia' => 'Alto Barinas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 58,
	        	'parroquia' => 'Manuel Palacio Fajardo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 58,
	        	'parroquia' => 'Juan Antonio Rodríguez Dominguez'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 58,
	        	'parroquia' => 'Dominga Ortíz de Páez'
	        ));
	    //--- de bolivar
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 59,
	        	'parroquia' => 'Barinitas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 59,
	        	'parroquia' => 'Altamira de Cáceres'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 59,
	        	'parroquia' => 'Calderas'
	        ));
	    //--- de cruz
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 60,
	        	'parroquia' => 'Barrancas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 60,
	        	'parroquia' => 'El Socorro'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 60,
	        	'parroquia' => 'Mazparrito'
	        ));
	    //--- de zamora
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 61,
	        	'parroquia' => 'Santa Bárbara'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 61,
	        	'parroquia' => 'Pedro Briceño Méndez'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 61,
	        	'parroquia' => 'Ramón Ignacio Méndez'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 61,
	        	'parroquia' => 'José Ignacio del Pumar'
	        ));
	    //--- de obispos
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 62,
	        	'parroquia' => 'Obispos'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 62,
	        	'parroquia' => 'Los Guasimitos'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 62,
	        	'parroquia' => 'El Real'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 62,
	        	'parroquia' => 'La Luz'
	        ));
	    //--- de pedraza
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 63,
	        	'parroquia' => 'Ciudad Bolívia'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 63,
	        	'parroquia' => 'José Ignacio Briceño'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 63,
	        	'parroquia' => 'José Félix Ribas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 63,
	        	'parroquia' => 'Páez'
	        ));
	    //--- de rojas
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 64,
	        	'parroquia' => 'Libertad'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 64,
	        	'parroquia' => 'Dolores'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 64,
	        	'parroquia' => 'Santa Rosa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 64,
	        	'parroquia' => 'Palacio Fajardo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 64,
	        	'parroquia' => 'Simón Rodríguez'
	        ));
	    //-- de sosa
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 65,
	        	'parroquia' => 'Ciudad de Nutrias'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 65,
	        	'parroquia' => 'El Regalo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 65,
	        	'parroquia' => 'Puerto Nutrias'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 65,
	        	'parroquia' => 'Santa Catalina'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 65,
	        	'parroquia' => 'Simón Bolívar'
	        ));
	//--- de bolivar
	    //--- de caroni
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 66,
	        	'parroquia' => 'Cachamay'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 66,
	        	'parroquia' => 'Chirica'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 66,
	        	'parroquia' => 'Dalla Costa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 66,
	        	'parroquia' => '11 de Abril'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 66,
	        	'parroquia' => 'Simón Bolívar'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 66,
	        	'parroquia' => 'Unare'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 66,
	        	'parroquia' => 'Universidad'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 66,
	        	'parroquia' => 'Vista al Sol'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 66,
	        	'parroquia' => 'Pozo Verde'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 66,
	        	'parroquia' => 'Yocoima'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 66,
	        	'parroquia' => '5 de Julio'
	        ));
	    //-- de cedeño
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 67,
	        	'parroquia' => 'Cedeño'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 67,
	        	'parroquia' => 'Altagracia'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 67,
	        	'parroquia' => 'Asención Farreras'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 67,
	        	'parroquia' => 'Guaniamo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 67,
	        	'parroquia' => 'La Urbana'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 67,
	        	'parroquia' => 'Pijiguaos'
	        ));
	    //--- de el callao
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 68,
	        	'parroquia' => 'El Callao'
	        ));
	    //--- de gran sabana
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 69,
	        	'parroquia' => 'Gran Sabana'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 69,
	        	'parroquia' => 'Ikabarú'
	        ));
	    //--- de heres
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 70,
	        	'parroquia' => 'Catedral'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 70,
	        	'parroquia' => 'Zea'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 70,
	        	'parroquia' => 'Orinoco'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 70,
	        	'parroquia' => 'José Antonio Páez'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 70,
	        	'parroquia' => 'Marhuanta'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 70,
	        	'parroquia' => 'Agua Salada'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 70,
	        	'parroquia' => 'Vista Hermosa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 70,
	        	'parroquia' => 'La Sabanita'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 70,
	        	'parroquia' => 'Panapana'
	        ));
	    //--- de piar
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 71,
	        	'parroquia' => 'Andrés Eloy Blanco'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 71,
	        	'parroquia' => 'Pedro Cova'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 71,
	        	'parroquia' => 'Upata'
	        ));
	    //-- de angostura
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 72,
	        	'parroquia' => 'Raúl Leoni'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 72,
	        	'parroquia' => 'Barceloneta'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 72,
	        	'parroquia' => 'Santa Bárbara'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 72,
	        	'parroquia' => 'San Francisco'
	        ));
	    //--- de roscio
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 73,
	        	'parroquia' => 'Roscio'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 73,
	        	'parroquia' => 'Salóm'
	        ));
	    // de sifontes
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 74,
	        	'parroquia' => 'Tumeremo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 74,
	        	'parroquia' => 'Dalla Costa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 74,
	        	'parroquia' => 'San Isidro'
	        ));
	    //--- de sucre
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 75,
	        	'parroquia' => 'Sucre'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 75,
	        	'parroquia' => 'Aripao'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 75,
	        	'parroquia' => 'Guarataro'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 75,
	        	'parroquia' => 'Las Majadas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 75,
	        	'parroquia' => 'Moitaco'
	        ));
	    // -- de chien
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 76,
	        	'parroquia' => 'Padre Pedro Chien'
	        ));
	//--- de carabobo
	    //--- de bejuma
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 77,
	        	'parroquia' => 'Bejuma'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 77,
	        	'parroquia' => 'Canoabo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 77,
	        	'parroquia' => 'Simón Bolívar'
	        ));
	    //-- de arvelo
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 78,
	        	'parroquia' => 'Güigüe'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 78,
	        	'parroquia' => 'Belén'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 78,
	        	'parroquia' => 'Tacarigua'
	        ));
	    //--- de ibarra
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 79,
	        	'parroquia' => 'Mariara'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 79,
	        	'parroquia' => 'Aguas Calientes'
	        ));
	    //-- de guacara
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 80,
	        	'parroquia' => 'Ciudad Alianza'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 80,
	        	'parroquia' => 'Guacara'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 80,
	        	'parroquia' => 'Yagua'
	        ));
	    //-- mora
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 81,
	        	'parroquia' => 'Morón'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 81,
	        	'parroquia' => 'Urama'
	        ));
	    //---de libertador
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 82,
	        	'parroquia' => 'Tocuyito'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 82,
	        	'parroquia' => 'Independencia'
	        ));
	    //--- de los guayos
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 83,
	        	'parroquia' => 'Los Guayos Valencia'
	        ));
	    //--- de miranda
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 84,
	        	'parroquia' => 'Miranda'
	        ));
	    //-- de montalban
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 85,
	        	'parroquia' => 'Montalbán'
	        ));
	    //-- de naguanagua
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 86,
	        	'parroquia' => 'Naguanagua de Valencia'
	        ));
	    // de puerto cabello
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 87,
	        	'parroquia' => 'Bartolomé Salóm'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 87,
	        	'parroquia' => 'Democracia'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 87,
	        	'parroquia' => 'Fraternidad'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 87,
	        	'parroquia' => 'Goaigoaza'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 87,
	        	'parroquia' => 'Juan José Flores'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 87,
	        	'parroquia' => 'Unión'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 87,
	        	'parroquia' => 'Borburata'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 87,
	        	'parroquia' => 'Patanemo'
	        ));
	    //--- de san diego
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 88,
	        	'parroquia' => 'San Diego Valencia'
	        ));
	    //--- de san joaquin
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 89,
	        	'parroquia' => 'San Joaquín'
	        ));
	    //--- de valencia
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 90,
	        	'parroquia' => 'Candelaria'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 90,
	        	'parroquia' => 'Catedral'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 90,
	        	'parroquia' => 'El Socorro'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 90,
	        	'parroquia' => 'Miguel Peña'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 90,
	        	'parroquia' => 'Rafaél Urdaneta'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 90,
	        	'parroquia' => 'San Blás'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 90,
	        	'parroquia' => 'San José'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 90,
	        	'parroquia' => 'Santa Rosa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 90,
	        	'parroquia' => 'Negro Primero'
	        ));
	//-- cojedes
	    //--- de anzoategui
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 91,
	        	'parroquia' => 'Cojedes'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 91,
	        	'parroquia' => 'Juan de Mata Suárez'
	        ));
	    //--- de falcon
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 92,
	        	'parroquia' => 'Tinaquillo'
	        ));
	    //--- de girardot
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 93,
	        	'parroquia' => 'El Baúl'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 93,
	        	'parroquia' => 'Sucre'
	        ));
	    //--- de blanco
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 94,
	        	'parroquia' => 'La Aguadita'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 94,
	        	'parroquia' => 'Macapo'
	        ));
	    //--- de pao
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 95,
	        	'parroquia' => 'El Pao'
	        ));
	    //--- de ricaurte
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 96,
	        	'parroquia' => 'El Amparo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 96,
	        	'parroquia' => 'Libertad de Cojedes'
	        ));
	    //--- de gallegos
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 97,
	        	'parroquia' => 'Rómulo Gallegos'
	        ));
	//--- de delta amacuro
	    //--- de antonio diaz
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 98,
	        	'parroquia' => 'Curiapo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 98,
	        	'parroquia' => 'Almirante Luis Brión'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 98,
	        	'parroquia' => 'Francisco Aniceto Lugo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 98,
	        	'parroquia' => 'Manuel Renaud'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 98,
	        	'parroquia' => 'Pedro Barral'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 98,
	        	'parroquia' => 'Santos de Abelgas'
	        ));
	    //--- de casacoima
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 99,
	        	'parroquia' => 'Imataca'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 99,
	        	'parroquia' => 'Juan Bautista Arismendi'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 99,
	        	'parroquia' => 'Manuel Piar'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 99,
	        	'parroquia' => 'Rómulo Gallegos'
	        ));
	    //--- de pedernales
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 100,
	        	'parroquia' => 'Pedernales'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 100,
	        	'parroquia' => 'Luis Beltrán Prieto Figueroa'
	        ));
	    //--- de tucupita
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 101,
	        	'parroquia' => 'San José'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 101,
	        	'parroquia' => 'José Vidal Marcano'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 101,
	        	'parroquia' => 'Leonardo Ruíz Pineda'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 101,
	        	'parroquia' => 'Mariscal Antonio José de Sucre'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 101,
	        	'parroquia' => 'Monseñor Argimiro García'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 101,
	        	'parroquia' => 'Virgen del Valle'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 101,
	        	'parroquia' => 'San Rafaél'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 101,
	        	'parroquia' => 'Juan Millan'
	        ));
	//--- del distrito capital
	    //-- del Libertador
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 102,
	        	'parroquia' => '23 de Enero'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 102,
	        	'parroquia' => 'Altagracia'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 102,
	        	'parroquia' => 'Antímano'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 102,
	        	'parroquia' => 'Caricuao'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 102,
	        	'parroquia' => 'Catedral'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 102,
	        	'parroquia' => 'Coche'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 102,
	        	'parroquia' => 'El Junquito'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 102,
	        	'parroquia' => 'El Paraiso'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 102,
	        	'parroquia' => 'El Recreo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 102,
	        	'parroquia' => 'El Valle'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 102,
	        	'parroquia' => 'Candelaria'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 102,
	        	'parroquia' => 'La Pastora'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 102,
	        	'parroquia' => 'La Vega'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 102,
	        	'parroquia' => 'Macarao'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 102,
	        	'parroquia' => 'San Agustín'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 102,
	        	'parroquia' => 'San Bernandino'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 102,
	        	'parroquia' => 'San José'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 102,
	        	'parroquia' => 'San Juan'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 102,
	        	'parroquia' => 'San Pedro'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 102,
	        	'parroquia' => 'Santa Rosalía'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 102,
	        	'parroquia' => 'Santa Teresa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 102,
	        	'parroquia' => 'Sucre'
	        ));
	//--- de falcon
	    //--- de acosta
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 103,
	        	'parroquia' => 'Capadare'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 103,
	        	'parroquia' => 'La Pastora'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 103,
	        	'parroquia' => 'Libertador'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 103,
	        	'parroquia' => 'San Juan de los Cayos'
	        ));
	    //--- de bolivar
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 104,
	        	'parroquia' => 'Aracua'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 104,
	        	'parroquia' => 'La Peña'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 104,
	        	'parroquia' => 'San Luis'
	        ));
	   	//-- de buchivacoa
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 105,
	        	'parroquia' => 'Bariro'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 105,
	        	'parroquia' => 'Borojó'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 105,
	        	'parroquia' => 'Capatárida'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 105,
	        	'parroquia' => 'Guajiro'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 105,
	        	'parroquia' => 'Seque'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 105,
	        	'parroquia' => 'Valle de Éroa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 105,
	        	'parroquia' => 'Zazárida'
	        ));
	    //--- de manaure
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 106,
	        	'parroquia' => 'Cacique Manaure'
	        ));
	    //--- de carirubana
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 107,
	        	'parroquia' => 'Norte'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 107,
	        	'parroquia' => 'Carirubana'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 107,
	        	'parroquia' => 'Santa Ana'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 107,
	        	'parroquia' => 'Punta Cardón'
	        ));
	    //--- de colina
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 108,
	        	'parroquia' => 'La Vela de Coro'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 108,
	        	'parroquia' => 'Acurigua'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 108,
	        	'parroquia' => 'Guaibacoa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 108,
	        	'parroquia' => 'Las Calderas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 108,
	        	'parroquia' => 'Mocoruca'
	        ));
	    //--- de dabajuro
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 109,
	        	'parroquia' => 'Dabajuro'
	        ));
	    //--- de democracia
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 110,
	        	'parroquia' => 'Agua Clara'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 110,
	        	'parroquia' => 'Avaria'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 110,
	        	'parroquia' => 'Pedregal'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 110,
	        	'parroquia' => 'Piedra Grande'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 110,
	        	'parroquia' => 'Purureche'
	        ));
	    //--- de falcon
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 111,
	        	'parroquia' => 'Adaure'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 111,
	        	'parroquia' => 'Adícora'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 111,
	        	'parroquia' => 'Baraived'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 111,
	        	'parroquia' => 'Buena Vista'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 111,
	        	'parroquia' => 'Jadacaquiva'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 111,
	        	'parroquia' => 'El Vínculo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 111,
	        	'parroquia' => 'El Hato'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 111,
	        	'parroquia' => 'Moruy'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 111,
	        	'parroquia' => 'Pueblo Nuevo'
	        ));
	    //--- de federacion
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 112,
	        	'parroquia' => 'Agua Larga'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 112,
	        	'parroquia' => 'Churuguara'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 112,
	        	'parroquia' => 'El Pajuí'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 112,
	        	'parroquia' => 'Independencia'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 112,
	        	'parroquia' => 'Mapararí'
	        ));
	    //--- de jacura
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 113,
	        	'parroquia' => 'Agua Linda'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 113,
	        	'parroquia' => 'Araurima'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 113,
	        	'parroquia' => 'Jacura'
	        ));
	    //--- de los taques
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 114,
	        	'parroquia' => 'Los Taques'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 114,
	        	'parroquia' => 'Judibana'
	        ));
	    //--- de mauroa
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 115,
	        	'parroquia' => 'Mene de Mauroa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 115,
	        	'parroquia' => 'San Félix'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 115,
	        	'parroquia' => 'Casigua'
	        ));
	    //--- de miranda
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 116,
	        	'parroquia' => 'Guzmán Guillermo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 116,
	        	'parroquia' => 'Mitare'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 116,
	        	'parroquia' => 'Río Seco'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 116,
	        	'parroquia' => 'Sabaneta'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 116,
	        	'parroquia' => 'San Antonio'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 116,
	        	'parroquia' => 'San Gabriel'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 116,
	        	'parroquia' => 'Santa Ana'
	        ));
	    //--- de iturriza
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 117,
	        	'parroquia' => 'Boca del Tocuyo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 117,
	        	'parroquia' => 'Chichiriviche'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 117,
	        	'parroquia' => 'Tocuyo de la Costa'
	        ));
	    //--- de palmasola
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 118,
	        	'parroquia' => 'Palamsola'
	        ));
	    //--- de petit
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 119,
	        	'parroquia' => 'Cabudare'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 119,
	        	'parroquia' => 'Colina'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 119,
	        	'parroquia' => 'Curimagua'
	        ));
	    //--- de piritu
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 120,
	        	'parroquia' => 'San José de la Costa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 120,
	        	'parroquia' => 'Píritu'
	        ));
	    //--- de san francisco
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 121,
	        	'parroquia' => 'San Francisco Mirimire'
	        ));
	    //--- de silva
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 122,
	        	'parroquia' => 'Tucacas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 122,
	        	'parroquia' => 'Boca de Aroa'
	        ));
	    //--- de sucre
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 123,
	        	'parroquia' => 'Sucre'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 123,
	        	'parroquia' => 'Pacaya'
	        ));
	    //--- de tocopero
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 124,
	        	'parroquia' => 'Tocópero'
	        ));
	    //--- de union
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 125,
	        	'parroquia' => 'EL Charal'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 125,
	        	'parroquia' => 'Las Vegas del Tuy'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 125,
	        	'parroquia' => 'Santa Cruz de Bucaral'
	        ));
	    //--- de urumaco
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 126,
	        	'parroquia' => 'Bruzual'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 126,
	        	'parroquia' => 'Urumaco'
	        ));
	    //--- de zamora
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 127,
	        	'parroquia' => 'Puerto Cumarebo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 127,
	        	'parroquia' => 'La Ciénaga'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 127,
	        	'parroquia' => 'La Soledad'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 127,
	        	'parroquia' => 'Pueblo Cumarebo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 127,
	        	'parroquia' => 'Zazárida'
	        ));
	//--- de guarico
	    //--- de camaguan
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 128,
	        	'parroquia' => 'Camaguán'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 128,
	        	'parroquia' => 'Puerto Miranda'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 128,
	        	'parroquia' => 'Uverito'
	        ));
	    //--- de chaguaramas
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 129,
	        	'parroquia' => 'Chaguaramas'
	        ));
	    //--- de el socorro
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 130,
	        	'parroquia' => 'El Socorro'
	        ));
	    //--- de miranda
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 131,
	        	'parroquia' => 'El Calvario'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 131,
	        	'parroquia' => 'El Rastro'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 131,
	        	'parroquia' => 'Guartinajas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 131,
	        	'parroquia' => 'Calabozo'
	        ));
	    //--- de ribas
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 132,
	        	'parroquia' => 'Tucupido'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 132,
	        	'parroquia' => 'San Rafaél de Laya'
	        ));
	    //--- de monagas
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 133,
	        	'parroquia' => 'Altagracia de Orituco'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 133,
	        	'parroquia' => 'San Rafaél de Orituco'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 133,
	        	'parroquia' => 'San Francisco Javier de Lezama'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 133,
	        	'parroquia' => 'Paso Real de Macaira'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 133,
	        	'parroquia' => 'Carlos Soublette'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 133,
	        	'parroquia' => 'San Francisco de Macaira'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 133,
	        	'parroquia' => 'Libertad de Orituco'
	        ));
	    //--- de roscio
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 134,
	        	'parroquia' => 'Cantagallo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 134,
	        	'parroquia' => 'San Juan de los Morros'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 134,
	        	'parroquia' => 'Parapara'
	        ));
	    //--- de mellado
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 135,
	        	'parroquia' => 'EL Sombrero'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 135,
	        	'parroquia' => 'Sosa'
	        ));
	    //--- de mercedes
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 136,
	        	'parroquia' => 'Las Mercedes'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 136,
	        	'parroquia' => 'Cabruta'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 136,
	        	'parroquia' => 'Santa Rita de Manapire'
	        ));
	    //--- de infante
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 137,
	        	'parroquia' => 'Valle de la Pascua'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 137,
	        	'parroquia' => 'Espino'
	        ));
	    //--- de zaraza
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 138,
	        	'parroquia' => 'San José de Unare'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 138,
	        	'parroquia' => 'Zaraza'
	        ));
	    //--- de ortiz
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 139,
	        	'parroquia' => 'San José de Tiznados'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 139,
	        	'parroquia' => 'San Francisco de Tiznados'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 139,
	        	'parroquia' => 'San Lorenzo de Tiznados'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 139,
	        	'parroquia' => 'Ortiz'
	        ));
	    //---- de guayabal
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 140,
	        	'parroquia' => 'Guayabal'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 140,
	        	'parroquia' => 'Casorla'
	        ));
	    //--- de guaribe
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 141,
	        	'parroquia' => 'San José de Guaribe'
	        ));
	    //--- de ipire
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 142,
	        	'parroquia' => 'Santa María de Ipire'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 142,
	        	'parroquia' => 'Altamira'
	        ));
	//--- de lara
	    //---blanco
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 143,
	        	'parroquia' => 'Quebrada Honda de Guache'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 143,
	        	'parroquia' => 'Pío Tamayo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 143,
	        	'parroquia' => 'Yacambú'
	        ));
	    //--- de crespo
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 144,
	        	'parroquia' => 'Freitez'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 144,
	        	'parroquia' => 'José María Blanco'
	        ));
	    //--- de iribarren
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 145,
	        	'parroquia' => 'Aguedo Felipe Alvarado'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 145,
	        	'parroquia' => 'Buena Vista'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 145,
	        	'parroquia' => 'Catedral'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 145,
	        	'parroquia' => 'Concepción'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 145,
	        	'parroquia' => 'El Cují'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 145,
	        	'parroquia' => 'Juárez'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 145,
	        	'parroquia' => 'Juan de Villegas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 145,
	        	'parroquia' => 'Santa Rosa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 145,
	        	'parroquia' => 'Tamaca'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 145,
	        	'parroquia' => 'Unión'
	        ));
	    //--- de jimenez
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 146,
	        	'parroquia' => 'Juan Bautista Rodríguez'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 146,
	        	'parroquia' => 'Cuara'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 146,
	        	'parroquia' => 'Diego de Lozada'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 146,
	        	'parroquia' => 'Paraiso de San José'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 146,
	        	'parroquia' => 'San Miguel'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 146,
	        	'parroquia' => 'Tintorero'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 146,
	        	'parroquia' => 'José Bernardo Dorante'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 146,
	        	'parroquia' => 'Coronel Mariano Peraza'
	        ));
	    //--- de moran
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 147,
	        	'parroquia' => 'Anzoátegui'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 147,
	        	'parroquia' => 'Bolívar'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 147,
	        	'parroquia' => 'Guárico'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 147,
	        	'parroquia' => 'Hilario Luna y Luna'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 147,
	        	'parroquia' => 'Humocaro Bajo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 147,
	        	'parroquia' => 'Humocaro Alto'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 147,
	        	'parroquia' => 'La Candelaria'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 147,
	        	'parroquia' => 'Morán'
	        ));
	    //--- de palavecino
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 148,
	        	'parroquia' => 'Cabudare'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 148,
	        	'parroquia' => 'José Gregorio Bastidas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 148,
	        	'parroquia' => 'Agua Viva'
	        ));
	    //--- de planas
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 149,
	        	'parroquia' => 'Buría'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 149,
	        	'parroquia' => 'Gustavo Vega'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 149,
	        	'parroquia' => 'Sarare'
	        ));
	    //--- de torres
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 150,
	        	'parroquia' => 'Altagracia'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 150,
	        	'parroquia' => 'Antonio Díaz'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 150,
	        	'parroquia' => 'Camacaro'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 150,
	        	'parroquia' => 'Castañeda'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 150,
	        	'parroquia' => 'Cecilio Zubillaga'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 150,
	        	'parroquia' => 'Chiquinquirá'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 150,
	        	'parroquia' => 'El Blanco'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 150,
	        	'parroquia' => 'Espinoza de los Monteros'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 150,
	        	'parroquia' => 'Heriberto Arrollo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 150,
	        	'parroquia' => 'Lara'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 150,
	        	'parroquia' => 'Las Mercedes'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 150,
	        	'parroquia' => 'Manuel Morillo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 150,
	        	'parroquia' => 'Montaña Verde'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 150,
	        	'parroquia' => 'Montes de Oca'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 150,
	        	'parroquia' => 'Reyes de Vargas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 150,
	        	'parroquia' => 'Torres'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 150,
	        	'parroquia' => 'Trinidad Samuel'
	        ));
	    //--- de urdaneta
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 151,
	        	'parroquia' => 'Xaguas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 151,
	        	'parroquia' => 'Siquisique'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 151,
	        	'parroquia' => 'San Miguel'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 151,
	        	'parroquia' => 'Moroturo'
	        ));
	//--- de merida
	    //-- de alberto adriani
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 152,
	        	'parroquia' => 'Presidente Betancourt'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 152,
	        	'parroquia' => 'Presidente Páez'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 152,
	        	'parroquia' => 'Presidente Rómulo Gallegos'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 152,
	        	'parroquia' => 'Gabriel Picón González'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 152,
	        	'parroquia' => 'Héctor Amable Mora'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 152,
	        	'parroquia' => 'José NUcete Sardi'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 152,
	        	'parroquia' => 'Pulido Méndez'
	        ));
	    //-- de andres bello
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 153,
	        	'parroquia' => 'La Azulita'
	        ));
	    //-- de salinas
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 154,
	        	'parroquia' => 'Santa Cruz de Mora'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 154,
	        	'parroquia' => 'Mesa Bolívar'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 154,
	        	'parroquia' => 'Mesa de las Palmas'
	        ));
	    //--- de aricagua
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 155,
	        	'parroquia' => 'Aricagua'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 155,
	        	'parroquia' => 'San Antonio'
	        ));
	    //--- chacon
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 156,
	        	'parroquia' => 'Canagua'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 156,
	        	'parroquia' => 'Capuri'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 156,
	        	'parroquia' => 'Chacantá'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 156,
	        	'parroquia' => 'El Molino'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 156,
	        	'parroquia' => 'Guaimaral'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 156,
	        	'parroquia' => 'Mucutuy'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 156,
	        	'parroquia' => 'Mucuchachí'
	        ));
	    //--- campo elias
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 157,
	        	'parroquia' => 'Fernández Peña'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 157,
	        	'parroquia' => 'Matriz'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 157,
	        	'parroquia' => 'Montalbán'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 157,
	        	'parroquia' => 'Acequias'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 157,
	        	'parroquia' => 'Jají'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 157,
	        	'parroquia' => 'La Mesa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 157,
	        	'parroquia' => 'San José del Sur'
	        ));
	    //--- de olmedo
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 158,
	        	'parroquia' => 'Tucaní'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 158,
	        	'parroquia' => 'Florencio Ramírez'
	        ));
	    //--- de quintero
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 159,
	        	'parroquia' => 'Santo Domingo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 159,
	        	'parroquia' => 'Las Piedras'
	        ));
	    //-- de gauraque
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 160,
	        	'parroquia' => 'Guaraque'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 160,
	        	'parroquia' => 'Mesa de Quintero'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 160,
	        	'parroquia' => 'Río Negro'
	        ));
	    //--- de salas
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 161,
	        	'parroquia' => 'Arapuey'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 161,
	        	'parroquia' => 'Palmira'
	        ));
	    //-- briceño
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 162,
	        	'parroquia' => 'San Cristóbal´de Torondoy'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 162,
	        	'parroquia' => 'Torondoy'
	        ));
	    //--- de libertador
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 163,
	        	'parroquia' => 'Antonio Spinetti Dini'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 163,
	        	'parroquia' => 'Arias'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 163,
	        	'parroquia' => 'Caracciolo Parra Pérez'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 163,
	        	'parroquia' => 'Domingo Peña'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 163,
	        	'parroquia' => 'El Llano'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 163,
	        	'parroquia' => 'Gonzálo Picón Febres'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 163,
	        	'parroquia' => 'Jacinto Plaza'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 163,
	        	'parroquia' => 'Juan Rodríguez Suárez'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 163,
	        	'parroquia' => 'Lasso de la Vega'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 163,
	        	'parroquia' => 'Mariano Picón Sala'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 163,
	        	'parroquia' => 'Milla'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 163,
	        	'parroquia' => 'Osuna Rodríguez'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 163,
	        	'parroquia' => 'Sagrario'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 163,
	        	'parroquia' => 'El Morro'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 163,
	        	'parroquia' => 'Los Nevados'
	        ));
	    //--- de miranda
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 164,
	        	'parroquia' => 'Andrés Eloy Blanco'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 164,
	        	'parroquia' => 'La Venta'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 164,
	        	'parroquia' => 'Piñango'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 164,
	        	'parroquia' => 'Timotes'
	        ));
	    //--- de lora
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 165,
	        	'parroquia' => 'Eloy Paredes'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 165,
	        	'parroquia' => 'San Rafaél de Alcázar'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 165,
	        	'parroquia' => 'Santa Elena de Arenales'
	        ));
	    //--- de noguera
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 166,
	        	'parroquia' => 'Santa María de Caparo'
	        ));
	    //--- pueblo llano
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 167,
	        	'parroquia' => 'Pueblo Llano'
	        ));
	    //--- rangel
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 168,
	        	'parroquia' => 'Cacute'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 168,
	        	'parroquia' => 'La Toma'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 168,
	        	'parroquia' => 'Mucuchíes'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 168,
	        	'parroquia' => 'Mucurubá'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 168,
	        	'parroquia' => 'San Rafaél'
	        ));
	    //--- de davila
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 169,
	        	'parroquia' => 'Gerónimo Maldonado'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 169,
	        	'parroquia' => 'Bailadores'
	        ));
	    //--- de marquina
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 170,
	        	'parroquia' => 'Tabay'
	        ));
	    //-- de sucre
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 171,
	        	'parroquia' => 'Chiguará'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 171,
	        	'parroquia' => 'Estánques'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 171,
	        	'parroquia' => 'Lagunillas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 171,
	        	'parroquia' => 'La Trampa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 171,
	        	'parroquia' => 'Pueblo Nuevo del Sur'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 171,
	        	'parroquia' => 'San Juan'
	        ));
	    //-- de tovar
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 172,
	        	'parroquia' => 'El Amparo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 172,
	        	'parroquia' => 'El Llano'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 172,
	        	'parroquia' => 'San Francisco'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 172,
	        	'parroquia' => 'Tovar'
	        ));
	    //--- de cordero
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 173,
	        	'parroquia' => 'Independencia'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 173,
	        	'parroquia' => 'María de la Concepción Palacios y Blanco'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 173,
	        	'parroquia' => 'Nueva Bolivia'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 173,
	        	'parroquia' => 'Santa Apolonia'
	        ));
	    //--- de Zea
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 174,
	        	'parroquia' => 'Caño El Tigre'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 174,
	        	'parroquia' => 'Zea'
	        ));
	//---- de miranda
	    //--- de acevedo
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 175,
	        	'parroquia' => 'Aragüita'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 175,
	        	'parroquia' => 'Arévalo González'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 175,
	        	'parroquia' => 'Capaya'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 175,
	        	'parroquia' => 'Caucagua'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 175,
	        	'parroquia' => 'Panaquire'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 175,
	        	'parroquia' => 'Ribas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 175,
	        	'parroquia' => 'El Café'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 175,
	        	'parroquia' => 'Marizapa'
	        ));
	    //--- de andres bello
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 176,
	        	'parroquia' => 'Cumbo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 176,
	        	'parroquia' => 'San José de Barlovento'
	        ));
	    //-- de baruta
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 177,
	        	'parroquia' => 'El Cafetal Caracas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 177,
	        	'parroquia' => 'Las Minas Caracas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 177,
	        	'parroquia' => 'Nuestra Señora del Rosario'
	        ));
	    //--- de brión
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 178,
	        	'parroquia' => 'Higuerote'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 178,
	        	'parroquia' => 'Curiepe'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 178,
	        	'parroquia' => 'Tacarigua de Brión'
	        ));
	    //--- de buroz
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 179,
	        	'parroquia' => 'Mamporal'
	        ));
	    //--- de carrizal
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 180,
	        	'parroquia' => 'Carrizal'
	        ));
	    //--- de chacao
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 181,
	        	'parroquia' => 'Chacao de Caracas'
	        ));
	    //--- de cristobal rojas
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 182,
	        	'parroquia' => 'Charallave'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 182,
	        	'parroquia' => 'Las Brisas'
	        ));
	    //--- del hatillo
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 183,
	        	'parroquia' => 'El Hatillo de Caracas'
	        ));
	    //--- de guaicapuro
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 184,
	        	'parroquia' => 'Altagracia de la Montaña'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 184,
	        	'parroquia' => 'Cecilio Acosta'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 184,
	        	'parroquia' => 'Los Teques'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 184,
	        	'parroquia' => 'El Jarillo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 184,
	        	'parroquia' => 'San Pedro'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 184,
	        	'parroquia' => 'Tácata'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 184,
	        	'parroquia' => 'Paracotos'
	        ));
	    //--- de independencia
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 185,
	        	'parroquia' => 'Cartanal'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 185,
	        	'parroquia' => 'Santa Teresa del Tuy'
	        ));
	    //--- de lander
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 186,
	        	'parroquia' => 'La Democracia'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 186,
	        	'parroquia' => 'Ocumare del Tuy'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 186,
	        	'parroquia' => 'Santa Bárbara'
	        ));
	    //--- de salias
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 187,
	        	'parroquia' => 'San Antonio de los Altos'
	        ));
	    //-- de páez
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 188,
	        	'parroquia' => 'Río Chico'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 188,
	        	'parroquia' => 'El Guapo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 188,
	        	'parroquia' => 'Tacarigua de la Laguna'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 188,
	        	'parroquia' => 'Paparo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 188,
	        	'parroquia' => 'San Fernándo del Guapo'
	        ));
	    //--- de castillo
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 189,
	        	'parroquia' => 'Santa Lucía del Tuy'
	        ));
	    //--- de gual
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 190,
	        	'parroquia' => 'Cúpira'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 190,
	        	'parroquia' => 'Machurucuto'
	        ));
	    //--- de plaza
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 191,
	        	'parroquia' => 'Guarenas'
	        ));
	    //--- de sb
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 192,
	        	'parroquia' => 'San Antonio de Yare'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 192,
	        	'parroquia' => 'San Francisco de Yare'
	        ));
	    //-- de sucre
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 193,
	        	'parroquia' => 'Leoncio Martínez'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 193,
	        	'parroquia' => 'Caucagüita'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 193,
	        	'parroquia' => 'Filas de Mariche'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 193,
	        	'parroquia' => 'La Dolorita'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 193,
	        	'parroquia' => 'Petare'
	        ));
	    //--- de urdaneta
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 194,
	        	'parroquia' => 'Cúa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 194,
	        	'parroquia' => 'Nueva Cúa'
	        ));
	    //-- de zamora
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 195,
	        	'parroquia' => 'Guatire'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 195,
	        	'parroquia' => 'Bolívar'
	        ));
	//--- de monagas
	    //--- de acosta
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 196,
	        	'parroquia' => 'San Antonio de Maturín'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 196,
	        	'parroquia' => 'San Francisco de Maturín'
	        ));
	    //-- de aguasay
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 197,
	        	'parroquia' => 'Aguasay'
	        ));
	    //--- de bolivar
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 198,
	        	'parroquia' => 'Caripito'
	        ));
	    //-- de caripe
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 199,
	        	'parroquia' => 'El Guácharo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 199,
	        	'parroquia' => 'La Guanota'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 199,
	        	'parroquia' => 'Sabana de Piedr'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 199,
	        	'parroquia' => 'San Agustín'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 199,
	        	'parroquia' => 'Teresen'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 199,
	        	'parroquia' => 'Caripe'
	        ));
	    //--- de cedeño
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 200,
	        	'parroquia' => 'Areo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 200,
	        	'parroquia' => 'Capital Cedeño'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 200,
	        	'parroquia' => 'San Félix de Cantalicio'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 200,
	        	'parroquia' => 'Viento Fresco'
	        ));
	    //-- de zamora
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 201,
	        	'parroquia' => 'El Tejero'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 201,
	        	'parroquia' => 'Punta de Mata'
	        ));
	    //-- de libertador
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 202,
	        	'parroquia' => 'Chaguaramas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 202,
	        	'parroquia' => 'Las Alhuacas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 202,
	        	'parroquia' => 'Tabasca'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 202,
	        	'parroquia' => 'Templador'
	        ));
	    //--- de maturin
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 203,
	        	'parroquia' => 'Alto de los Godos'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 203,
	        	'parroquia' => 'Boquerón'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 203,
	        	'parroquia' => 'Las Cocuizas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 203,
	        	'parroquia' => 'La Cruz'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 203,
	        	'parroquia' => 'San Simón'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 203,
	        	'parroquia' => 'El Corozo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 203,
	        	'parroquia' => 'El Furrial'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 203,
	        	'parroquia' => 'Jusepín'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 203,
	        	'parroquia' => 'La Pica'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 203,
	        	'parroquia' => 'San Vicente'
	        ));
	    //-- de piar
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 204,
	        	'parroquia' => 'Aparicio'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 204,
	        	'parroquia' => 'Aragua de Maturín'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 204,
	        	'parroquia' => 'Chamagual'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 204,
	        	'parroquia' => 'El Pinto'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 204,
	        	'parroquia' => 'Guanaguana'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 204,
	        	'parroquia' => 'La Toscana'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 204,
	        	'parroquia' => 'Taguaya'
	        ));
	    //--- de punceres
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 205,
	        	'parroquia' => 'Cachipo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 205,
	        	'parroquia' => 'Quiriquire'
	        ));
	    // de barbara
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 206,
	        	'parroquia' => 'Santa BárbaraB'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 206,
	        	'parroquia' => 'Morón'
	        ));
	    //--- de sotillo
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 207,
	        	'parroquia' => 'Barrancas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 207,
	        	'parroquia' => 'Los Barrancos de Fajardo'
	        ));
	    //--- de uracoa
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 208,
	        	'parroquia' => 'Uracoa'
	        ));
	//-- de NUeva esparta
	    //--- de antolin
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 209,
	        	'parroquia' => 'Antolín del Campo'
	        ));
	    //-- de Arismendi
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 210,
	        	'parroquia' => 'Arismendi'
	        ));
	    //--- de diaz
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 211,
	        	'parroquia' => 'San Juan Bautista'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 211,
	        	'parroquia' => 'Zabala'
	        ));
	    //--- de garcia
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 212,
	        	'parroquia' => 'García'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 212,
	        	'parroquia' => 'Francisco Fajardo'
	        ));
	    //--- de gomez
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 213,
	        	'parroquia' => 'Bolívar'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 213,
	        	'parroquia' => 'Guevara'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 213,
	        	'parroquia' => 'Cerro de Matasiete'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 213,
	        	'parroquia' => 'Santa Ana'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 213,
	        	'parroquia' => 'Sucre'
	        ));
	    //--- de maneiro
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 214,
	        	'parroquia' => 'Aguirre'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 214,
	        	'parroquia' => 'Maneiro'
	        ));
	    //-- de marcano
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 215,
	        	'parroquia' => 'Adrián'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 215,
	        	'parroquia' => 'Juan Griego'
	        ));
	    //--- de mariño
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 216,
	        	'parroquia' => 'Mariño'
	        ));
	    //-- de macanao
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 217,
	        	'parroquia' => 'San Francisco de Macanao'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 217,
	        	'parroquia' => 'Boca de Río'
	        ));
	    //-- de tubores
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 218,
	        	'parroquia' => 'Tubores'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 218,
	        	'parroquia' => 'Los Barales'
	        ));
	    //--- de villalba
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 219,
	        	'parroquia' => 'Vicente Fuentes'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 219,
	        	'parroquia' => 'Villalba'
	        ));
	//-- de portuguesa
	    //-- de agua blanca
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 220,
	        	'parroquia' => 'Agua Blanca'
	        ));
	    //--- de araure
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 221,
	        	'parroquia' => 'Araure'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 221,
	        	'parroquia' => 'Río Acarigua'
	        ));
	    //--- de esteller
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 222,
	        	'parroquia' => 'Píritu'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 222,
	        	'parroquia' => 'Uveral'
	        ));
	    //--- de guanare
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 223,
	        	'parroquia' => 'Córdova'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 223,
	        	'parroquia' => 'Guanare'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 223,
	        	'parroquia' => 'San José de la Montaña'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 223,
	        	'parroquia' => 'San Juan de Guanaguanare'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 223,
	        	'parroquia' => 'Virgen de Coromoto'
	        ));
	    //--- de guanarito
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 224,
	        	'parroquia' => 'Guanarito'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 224,
	        	'parroquia' => 'Trinidad de la Capilla'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 224,
	        	'parroquia' => 'Divina Pastora'
	        ));
	    //--- de unda
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 225,
	        	'parroquia' => 'Peña Blanca'
	        ));
	    //--- de ospino
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 226,
	        	'parroquia' => 'Aparición'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 226,
	        	'parroquia' => 'La Estación'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 226,
	        	'parroquia' => 'Ospino'
	        ));
	    //-- de paez
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 227,
	        	'parroquia' => 'Acarigua'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 227,
	        	'parroquia' => 'Payara'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 227,
	        	'parroquia' => 'Pimpinela'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 227,
	        	'parroquia' => 'Ramón Peraza'
	        ));
	    //-- de papelon
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 228,
	        	'parroquia' => 'Caño Delgadito'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 228,
	        	'parroquia' => 'Papelón'
	        ));
	    //-- de boconoito
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 229,
	        	'parroquia' => 'Antolín Tovar Aquino'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 229,
	        	'parroquia' => 'Boconoíto'
	        ));
	    //--- de onoto
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 230,
	        	'parroquia' => 'Santa Fé'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 230,
	        	'parroquia' => 'San Rafaél de Onoto'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 230,
	        	'parroquia' => 'Thermo Morales'
	        ));
	    //--- de rosalia
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 231,
	        	'parroquia' => 'Florida'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 231,
	        	'parroquia' => 'El Playón'
	        ));
	    //--- de sucre
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 232,
	        	'parroquia' => 'Biscucuy'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 232,
	        	'parroquia' => 'Concepción'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 232,
	        	'parroquia' => 'San José de Saguaz'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 232,
	        	'parroquia' => 'San Rafaél de Palo Alzado'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 232,
	        	'parroquia' => 'Uvencio Antonio Velásquez'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 232,
	        	'parroquia' => 'Villa Rosa'
	        ));
	    //-- de turen
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 233,
	        	'parroquia' => 'Villa Bruzual'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 233,
	        	'parroquia' => 'Canelones'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 233,
	        	'parroquia' => 'Santa Cruz'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 233,
	        	'parroquia' => 'San Isidro Labrador'
	        ));
	//--- de sucre
	    //-- de eloy blanco
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 234,
	        	'parroquia' => 'Mariño'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 234,
	        	'parroquia' => 'Rómulo Gallegos'
	        ));
	    //--- de mata
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 235,
	        	'parroquia' => 'San José de Aerocuar'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 235,
	        	'parroquia' => 'Tavera Acosta'
	        ));
	    //--- de arismendi
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 236,
	        	'parroquia' => 'Río Caribe'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 236,
	        	'parroquia' => 'Antonio José de Sucre'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 236,
	        	'parroquia' => 'El Morro de Puerto Santo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 236,
	        	'parroquia' => 'Puerto Santo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 236,
	        	'parroquia' => 'San Juan de las Galdonas'
	        ));
	    //--- de benitez
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 237,
	        	'parroquia' => 'El Pilar'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 237,
	        	'parroquia' => 'El Rincón'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 237,
	        	'parroquia' => 'General Francisco Antonio Vásquez'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 237,
	        	'parroquia' => 'Guaraúnos'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 237,
	        	'parroquia' => 'Tunuapuicito'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 237,
	        	'parroquia' => 'Unión'
	        ));
	    //--- de bermudez
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 238,
	        	'parroquia' => 'Santa Catalina'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 238,
	        	'parroquia' => 'Santa Rosa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 238,
	        	'parroquia' => 'Santa Teresa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 238,
	        	'parroquia' => 'Bolívar'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 238,
	        	'parroquia' => 'Maracapana'
	        ));
	    //--- de bolivar
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 239,
	        	'parroquia' => 'Marigüitar'
	        ));
	    //--- de cajigal
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 240,
	        	'parroquia' => 'Libertad'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 240,
	        	'parroquia' => 'El Pajuí'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 240,
	        	'parroquia' => 'Yaguaraparo'
	        ));
	    //--- de acosta
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 241,
	        	'parroquia' => 'Araya'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 241,
	        	'parroquia' => 'Chacopata'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 241,
	        	'parroquia' => 'Manicuare'
	        ));
	    //--- de libertador
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 242,
	        	'parroquia' => 'Tunapuy'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 242,
	        	'parroquia' => 'Campo Elías'
	        ));
	    //-- de mariño
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 243,
	        	'parroquia' => 'Irapa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 243,
	        	'parroquia' => 'Campo Claro'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 243,
	        	'parroquia' => 'Marabal'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 243,
	        	'parroquia' => 'San Antonio de Irapa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 243,
	        	'parroquia' => 'Soro'
	        ));
	    //--- de mejia
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 244,
	        	'parroquia' => 'San Antonio del Golfo'
	        ));
	    //--- de montes
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 245,
	        	'parroquia' => 'Cumanacoa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 245,
	        	'parroquia' => 'Arenas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 245,
	        	'parroquia' => 'Aricagua'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 245,
	        	'parroquia' => 'Cocollar'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 245,
	        	'parroquia' => 'San Fernándo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 245,
	        	'parroquia' => 'San Lorenzo'
	        ));
	    //--- de ribero
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 246,
	        	'parroquia' => 'Cariaco'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 246,
	        	'parroquia' => 'Catuaro'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 246,
	        	'parroquia' => 'Rendón'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 246,
	        	'parroquia' => 'Santa Cruz'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 246,
	        	'parroquia' => 'Santa María'
	        ));
	    //--- de sucre
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 247,
	        	'parroquia' => 'Altagracia'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 247,
	        	'parroquia' => 'Santa Inés'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 247,
	        	'parroquia' => 'Valentín Valiente'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 247,
	        	'parroquia' => 'Ayacucho'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 247,
	        	'parroquia' => 'San Juan'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 247,
	        	'parroquia' => 'Raúl Leoni'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 247,
	        	'parroquia' => 'Gran Mariscal'
	        ));
	    //--- de valdez	
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 248,
	        	'parroquia' => 'Cristóbal Colón'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 248,
	        	'parroquia' => 'Bideau'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 248,
	        	'parroquia' => 'Punta de Piedras'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 248,
	        	'parroquia' => 'Güiria'
	        ));
	//--- de tachira
	    //--- de andres bello
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 249,
	        	'parroquia' => 'Cordero'
	        ));
	    //--- de costa
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 250,
	        	'parroquia' => 'Las Mesas'
	        ));
	    //--- de ayacucho
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 251,
	        	'parroquia' => 'Rivas Verti'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 251,
	        	'parroquia' => 'San Juan de Colón'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 251,
	        	'parroquia' => 'San Pedro del Río'
	        ));
	    //--- de bolivar
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 252,
	        	'parroquia' => 'Isaias Medina Angarita'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 252,
	        	'parroquia' => 'Juan Vicente Gómez'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 252,
	        	'parroquia' => 'Palotal'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 252,
	        	'parroquia' => 'San Antonio del Táchira'
	        ));
	    //--- de cardenas
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 253,
	        	'parroquia' => 'Amenodoro Rangel Lamús'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 253,
	        	'parroquia' => 'La Florida'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 253,
	        	'parroquia' => 'Táriba'
	        ));
	    //--- de cordova
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 254,
	        	'parroquia' => 'Santa Ana del Táchira'
	        ));
	    //--- de feo
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 255,
	        	'parroquia' => 'Alberto Adriani'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 255,
	        	'parroquia' => 'San Rafaél del Piñal'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 255,
	        	'parroquia' => 'Santo Domingo'
	        ));
	    //--- de miranda
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 256,
	        	'parroquia' => 'San José de Bolívar'
	        ));
	    //--- de hevia
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 257,
	        	'parroquia' => 'Boca de Grita'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 257,
	        	'parroquia' => 'José Antonio Páez'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 257,
	        	'parroquia' => 'La Fría'
	        ));
	    //---- de guasimos
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 258,
	        	'parroquia' => 'Palmira'
	        ));
	    //--- de independencia
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 259,
	        	'parroquia' => 'Capacho Nuevo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 259,
	        	'parroquia' => 'Juan Germán Roscio'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 259,
	        	'parroquia' => 'Román Cárdenas'
	        ));
	    //-- de jauregui
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 260,
	        	'parroquia' => 'Emilio Constantino Guerrero'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 260,
	        	'parroquia' => 'La Grita'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 260,
	        	'parroquia' => 'Monseñor Miguel Antonio Salas'
	        ));
	    //--- de vargas
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 261,
	        	'parroquia' => 'El Cobre'
	        ));
	    //--- de junin
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 262,
	        	'parroquia' => 'Bramón'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 262,
	        	'parroquia' => 'La Petrólea'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 262,
	        	'parroquia' => 'Quinimarí'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 262,
	        	'parroquia' => 'Rubio'
	        ));
	    //--- de tadeo
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 263,
	        	'parroquia' => 'Umuquena'
	        ));
	    //--- de libertad
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 264,
	        	'parroquia' => 'Capacho Viejo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 264,
	        	'parroquia' => 'Cipriano Castro'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 264,
	        	'parroquia' => 'Manuel Felipe Rugeles'
	        ));
	    //--- de libertador
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 265,
	        	'parroquia' => 'Abejales'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 265,
	        	'parroquia' => 'Doradas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 265,
	        	'parroquia' => 'Emeterio Ochoa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 265,
	        	'parroquia' => 'San Joaquín de Navay'
	        ));
	    //-- de lobatera
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 266,
	        	'parroquia' => 'Lobatera'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 266,
	        	'parroquia' => 'Constitución'
	        ));
	    //--- de michelena
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 267,
	        	'parroquia' => 'Michelena'
	        ));
	    //--- de panamericano
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 268,
	        	'parroquia' => 'Coloncito'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 268,
	        	'parroquia' => 'La Palmita'
	        ));
	    //--- de ureña
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 269,
	        	'parroquia' => 'Ureña'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 269,
	        	'parroquia' => 'Nueva Arcadia'
	        ));
	    //--- de urdaneta
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 270,
	        	'parroquia' => 'Delicias'
	        ));
	    //--- de maldonado
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 271,
	        	'parroquia' => 'Boconó'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 271,
	        	'parroquia' => 'Hernández'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 271,
	        	'parroquia' => 'La Tendida'
	        ));
	    //--- de san cristobal
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 272,
	        	'parroquia' => 'Francisco Romero Lobo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 272,
	        	'parroquia' => 'La Concordia'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 272,
	        	'parroquia' => 'Pedro María Morantes'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 272,
	        	'parroquia' => 'San Juan Bautista'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 272,
	        	'parroquia' => 'San Sebastián'
	        ));
	    //--- de seboruco
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 273,
	        	'parroquia' => 'Seboruco'
	        ));
	    //--- de rodriguez
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 274,
	        	'parroquia' => 'San Simón'
	        ));
	    //--- de sucre
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 275,
	        	'parroquia' => 'Eleazar López Contreras'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 275,
	        	'parroquia' => 'Capital Sucre'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 275,
	        	'parroquia' => 'San Pablo'
	        ));
	    //--- de torbes
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 276,
	        	'parroquia' => 'San Jocesito'
	        ));
	    //---de uribante
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 277,
	        	'parroquia' => 'Cárdenas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 277,
	        	'parroquia' => 'Juan Pablo Peñaloza'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 277,
	        	'parroquia' => 'Potosí'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 277,
	        	'parroquia' => 'Pregonero'
	        ));
	//-- de trujillo
	    //--- de bello
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 278,
	        	'parroquia' => 'Araguaney'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 278,
	        	'parroquia' => 'El Jaguito'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 278,
	        	'parroquia' => 'La Esperanza'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 278,
	        	'parroquia' => 'Santa Isabel'
	        ));
	    //--- de boconó
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 279,
	        	'parroquia' => 'Boconó'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 279,
	        	'parroquia' => 'El Carmen'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 279,
	        	'parroquia' => 'Mosquey'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 279,
	        	'parroquia' => 'Burbusay'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 279,
	        	'parroquia' => 'General Ribas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 279,
	        	'parroquia' => 'Guaramacal'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 279,
	        	'parroquia' => 'Vega de Guaramacal'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 279,
	        	'parroquia' => 'Monseñor Jáuregui'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 279,
	        	'parroquia' => 'Rafaél Rangel'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 279,
	        	'parroquia' => 'San Miguel'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 279,
	        	'parroquia' => 'San José'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 279,
	        	'parroquia' => 'Ayacucho'
	        ));
	    //--- de bolivar
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 280,
	        	'parroquia' => 'Sabana Grande'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 280,
	        	'parroquia' => 'Cheregüé'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 280,
	        	'parroquia' => 'Granados'
	        ));
	    //--- de candelaria
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 281,
	        	'parroquia' => 'Arnoldo Gabaldón'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 281,
	        	'parroquia' => 'Bolivia'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 281,
	        	'parroquia' => 'Carrillo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 281,
	        	'parroquia' => 'Cegarra'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 281,
	        	'parroquia' => 'Chejendé'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 281,
	        	'parroquia' => 'Manuel Salvador Ulloa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 281,
	        	'parroquia' => 'San José'
	        ));
	    //--- de carache
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 282,
	        	'parroquia' => 'Carache'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 282,
	        	'parroquia' => 'La Concepción'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 282,
	        	'parroquia' => 'Cuicas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 282,
	        	'parroquia' => 'Panamericana'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 282,
	        	'parroquia' => 'Santa Cruz'
	        ));
	    //--- de escuque
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 283,
	        	'parroquia' => 'Escuque'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 283,
	        	'parroquia' => 'La Unión'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 283,
	        	'parroquia' => 'Santa Rita'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 283,
	        	'parroquia' => 'Sabana Libre'
	        ));
	    //--- de cañizalez
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 284,
	        	'parroquia' => 'El Socorro'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 284,
	        	'parroquia' => 'Los Caprichos'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 284,
	        	'parroquia' => 'Antonio José de Sucre'
	        ));
	    //--- de elias
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 285,
	        	'parroquia' => 'Campo Elías'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 285,
	        	'parroquia' => 'Arnoldo Galbadón'
	        ));
	    //-- de la ceiba
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 286,
	        	'parroquia' => 'Santa Apolonia'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 286,
	        	'parroquia' => 'El Progreso'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 286,
	        	'parroquia' => 'La Ceiba'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 276,
	        	'parroquia' => '03 de Febrero'
	        ));
	    //-- de miranda
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 287,
	        	'parroquia' => 'El Dividive'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 287,
	        	'parroquia' => 'Agua Santa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 287,
	        	'parroquia' => 'Agua Caliente'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 287,
	        	'parroquia' => 'El Cenizo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 287,
	        	'parroquia' => 'Valerita'
	        ));
	    //--- de carmelo
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 288,
	        	'parroquia' => 'Monte Carmelo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 288,
	        	'parroquia' => 'Buena Vista'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 288,
	        	'parroquia' => 'Santa María del Horcón'
	        ));
	    //-- de motatán
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 289,
	        	'parroquia' => 'Motatán'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 289,
	        	'parroquia' => 'El Baño'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 289,
	        	'parroquia' => 'Jalisco'
	        ));
	    //--- de panpám
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 290,
	        	'parroquia' => 'Panpám'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 290,
	        	'parroquia' => 'Flor de Patria'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 290,
	        	'parroquia' => 'La Paz'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 290,
	        	'parroquia' => 'Santa Ana'
	        ));
	    //--- de carvajal
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 291,
	        	'parroquia' => 'Carvajal'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 291,
	        	'parroquia' => 'Campo Alegre'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 291,
	        	'parroquia' => 'Antonio Nicolás Briceño'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 291,
	        	'parroquia' => 'José Leonardo Suárez'
	        ));
	    //--- de sucre
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 292,
	        	'parroquia' => 'Sabana de Mendoza'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 292,
	        	'parroquia' => 'Junín'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 292,
	        	'parroquia' => 'Valmore Rodríguez'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 292,
	        	'parroquia' => 'El Paraiso'
	        ));
	    //-- de trujillo
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 293,
	        	'parroquia' => 'Andrés Linares'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 293,
	        	'parroquia' => 'Chiquinquirá'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 293,
	        	'parroquia' => 'Cristóbal Mendoza'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 293,
	        	'parroquia' => 'Cruz Carrillo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 293,
	        	'parroquia' => 'Matriz'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 293,
	        	'parroquia' => 'Monseñor Carrillo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 293,
	        	'parroquia' => 'Tres Esquinas'
	        ));
	    //--- de urdaneta
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 294,
	        	'parroquia' => 'Calimbú'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 294,
	        	'parroquia' => 'Jajó'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 294,
	        	'parroquia' => 'La Mesa de Esnujaque'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 294,
	        	'parroquia' => 'Santiago'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 294,
	        	'parroquia' => 'Tuñame'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 294,
	        	'parroquia' => 'La Quebrada'
	        )); 
	    //-- de valera
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 295,
	        	'parroquia' => 'Juan Ignacio Montilla'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 295,
	        	'parroquia' => 'La Beatriz'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 295,
	        	'parroquia' => 'La Puerta'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 295,
	        	'parroquia' => 'Mendoza del Valle Momboy'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 295,
	        	'parroquia' => 'Mercedes Díaz'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 295,
	        	'parroquia' => 'San Luis'
	        ));
	    //-- de pampanito
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 296,
	        	'parroquia' => 'Pampanito'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 296,
	        	'parroquia' => 'La Concepción'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 296,
	        	'parroquia' => 'Pampanito II'
	        ));
	//-- de vargas
	    //-- de vargas
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 297,
	        	'parroquia' => 'Caraballeda'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 297,
	        	'parroquia' => 'Carayaca'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 297,
	        	'parroquia' => 'Carlos Soublette'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 297,
	        	'parroquia' => 'Caruao'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 297,
	        	'parroquia' => 'Catia La Mar'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 297,
	        	'parroquia' => 'El Junko'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 297,
	        	'parroquia' => 'La Guaira'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 297,
	        	'parroquia' => 'Macuto'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 297,
	        	'parroquia' => 'Maiquetía'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 297,
	        	'parroquia' => 'Naiguatá'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 297,
	        	'parroquia' => 'Urimare'
	        ));
	//--- de yaracuy
	    //--- de bastidas
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 298,
	        	'parroquia' => 'Arístides Bastidas'
	        ));
	    //--- de Bolivar
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 299,
	        	'parroquia' => 'Bolivar'
	        ));
	    //--- de bruzual
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 300,
	        	'parroquia' => 'Chivacoa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 300,
	        	'parroquia' => 'Campo Elías'
	        ));
	    //--- de cocorote
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 301,
	        	'parroquia' => 'Cocorote'
	        ));
	    //--- de Independencia
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 302,
	        	'parroquia' => 'Independencia'
	        ));
	    //--- de paez
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 303,
	        	'parroquia' => 'José Antonio Páez'
	        ));
	    //-- de la trinidad
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 304,
	        	'parroquia' => 'La Trinidad'
	        ));
	    //--- de mongue
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 305,
	        	'parroquia' => 'Manuel Mongue'
	        ));
	    //--- de Nirgua
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 306,
	        	'parroquia' => 'Salóm'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 306,
	        	'parroquia' => 'Temerla'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 306,
	        	'parroquia' => 'Nirgua'
	        ));
	    //--- de peña
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 307,
	        	'parroquia' => 'San Andrés'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 307,
	        	'parroquia' => 'Yaritagua'
	        ));
	    //-- de felipe
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 308,
	        	'parroquia' => 'San Javier'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 308,
	        	'parroquia' => 'Albarico'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 308,
	        	'parroquia' => 'San Felipe'
	        ));
	    //-- de sucre
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 309,
	        	'parroquia' => 'Sucre'
	        ));
	    //--- de urachiche
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 310,
	        	'parroquia' => 'Urachiche'
	        ));
	    //--- de veroes
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 311,
	        	'parroquia' => 'El Guayabo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 311,
	        	'parroquia' => 'Farriar'
	        ));
	//--- de Zulia
	    //--- de padilla
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 312,
	        	'parroquia' => 'Isla de Toas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 312,
	        	'parroquia' => 'Monagas'
	        ));
	    //--- de baralt
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 313,
	        	'parroquia' => 'San Timoteo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 313,
	        	'parroquia' => 'General Urdaneta'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 313,
	        	'parroquia' => 'Libertador'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 313,
	        	'parroquia' => 'Marcelino Briceño'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 313,
	        	'parroquia' => 'Nuevo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 313,
	        	'parroquia' => 'Manuel Guanipa Matos'
	        ));
	    //--- de cabimas
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 314,
	        	'parroquia' => 'Ambrosío'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 314,
	        	'parroquia' => 'Carmen Herrera'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 314,
	        	'parroquia' => 'La Rosa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 314,
	        	'parroquia' => 'Germán Ríos Linares'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 314,
	        	'parroquia' => 'San Benito'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 314,
	        	'parroquia' => 'Rómulo Betancourt'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 314,
	        	'parroquia' => 'Jorge Hernández'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 314,
	        	'parroquia' => 'Punta Gorda'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 314,
	        	'parroquia' => 'Arístides Calvani'
	        ));
	    //--  de catatumbo
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 315,
	        	'parroquia' => 'Encontrados'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 315,
	        	'parroquia' => 'Udón Pérez'
	        ));
	    //-- de colon
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 316,
	        	'parroquia' => 'Moralito'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 316,
	        	'parroquia' => 'San Carlos del Zulia'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 316,
	        	'parroquia' => 'Santa Cruz del Zulia'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 316,
	        	'parroquia' => 'Santa Bárbara'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 316,
	        	'parroquia' => 'Urribarri'
	        ));
	    //-- pulgar
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 317,
	        	'parroquia' => 'Carlos Quevedo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 317,
	        	'parroquia' => 'Francisco Javier Pulgar'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 317,
	        	'parroquia' => 'Simón Rodríguez'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 317,
	        	'parroquia' => 'Guamo-Gavilanes'
	        ));
	    //--- de lossada
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 318,
	        	'parroquia' => 'La Concepción'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 318,
	        	'parroquia' => 'San José'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 318,
	        	'parroquia' => 'Mariano Parra León'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 318,
	        	'parroquia' => 'José Ramón Yepez'
	        ));
	    //-- de semprun
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 319,
	        	'parroquia' => 'Jesús María Semprún'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 319,
	        	'parroquia' => 'Barí'
	        ));
	    //-- de la cañada
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 320,
	        	'parroquia' => 'Concepción'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 320,
	        	'parroquia' => 'Andrés Bello'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 320,
	        	'parroquia' => 'Chiquinquirá'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 320,
	        	'parroquia' => 'El Carmelo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 320,
	        	'parroquia' => 'Potreritos'
	        ));
	    //--- de lagunillas
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 321,
	        	'parroquia' => 'Libertad'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 321,
	        	'parroquia' => 'Alonso de Ojeda'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 321,
	        	'parroquia' => 'Venezuela'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 321,
	        	'parroquia' => 'Eleazar López Contreras'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 321,
	        	'parroquia' => 'Campo Lara'
	        ));
	    //-- machiques
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 322,
	        	'parroquia' => 'Bartolomé de las Casas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 322,
	        	'parroquia' => 'Libertad'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 322,
	        	'parroquia' => 'Río Negro'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 322,
	        	'parroquia' => 'San José de Perijá'
	        ));
	    //--- mara
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 323,
	        	'parroquia' => 'San Rafaél'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 323,
	        	'parroquia' => 'La Sierrita'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 323,
	        	'parroquia' => 'Las Parcelas'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 323,
	        	'parroquia' => 'Luis De Vicente'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 323,
	        	'parroquia' => 'Monseñor Marcos Sergio Godoy'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 323,
	        	'parroquia' => 'Ricaurte'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 323,
	        	'parroquia' => 'Tamare'
	        ));
	    //--- de maracaibo
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 324,
	        	'parroquia' => 'Antonio Borjas Romero'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 324,
	        	'parroquia' => 'Bolívar'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 324,
	        	'parroquia' => 'Cacique Mara'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 324,
	        	'parroquia' => 'Carracciolo Parra Pérez'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 324,
	        	'parroquia' => 'Cecilio Acosta'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 324,
	        	'parroquia' => 'Cristo de Aranza'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 324,
	        	'parroquia' => 'Coquivacoa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 324,
	        	'parroquia' => 'Chiquinquirá'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 324,
	        	'parroquia' => 'Francisco Eugenio Bustamante'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 324,
	        	'parroquia' => 'Idelfonzo Vásquez'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 324,
	        	'parroquia' => 'Juana de Ávila'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 324,
	        	'parroquia' => 'Luis Hurtado Higuera'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 324,
	        	'parroquia' => 'Manuel Dagnino'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 324,
	        	'parroquia' => 'Olegario Villalobos'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 324,
	        	'parroquia' => 'Raúl Leoni'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 324,
	        	'parroquia' => 'Santa Lucía'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 324,
	        	'parroquia' => 'Venancio Pulgar'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 324,
	        	'parroquia' => 'San Isidro'
	        ));
	    //--- de miranda
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 325,
	        	'parroquia' => 'Altagracia'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 325,
	        	'parroquia' => 'Faría'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 325,
	        	'parroquia' => 'Ana María Campos'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 325,
	        	'parroquia' => 'San Antonio'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 325,
	        	'parroquia' => 'San José'
	        ));
	    //--- de guajira
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 326,
	        	'parroquia' => 'Sinamaica'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 326,
	        	'parroquia' => 'Alta Guajira'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 326,
	        	'parroquia' => 'Elías Sánchez Rubio'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 326,
	        	'parroquia' => 'Guajira'
	        ));
	    //-- de perija
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 327,
	        	'parroquia' => 'Donaldo García'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 327,
	        	'parroquia' => 'El Rosario'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 327,
	        	'parroquia' => 'Sixto Zambrano'
	        ));
	    //-- de san francisco
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 328,
	        	'parroquia' => 'San Francisco'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 328,
	        	'parroquia' => 'El Bajo'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 328,
	        	'parroquia' => 'Domitila Flores'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 328,
	        	'parroquia' => 'Francisco Ochoa'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 328,
	        	'parroquia' => 'Los Cortijos'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 328,
	        	'parroquia' => 'Marcial Hernández'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 328,
	        	'parroquia' => 'José Domingo Rus'
	        ));
	    //--- de santa rita
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 329,
	        	'parroquia' => 'Santa Rita'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 329,
	        	'parroquia' => 'El Mene'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 329,
	        	'parroquia' => 'Pedro Lucas Urribarrí'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 329,
	        	'parroquia' => 'José Cenobio Urribarrí'
	        ));
	    //---de sb
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 330,
	        	'parroquia' => 'Rafaél María Baralt'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 330,
	        	'parroquia' => 'Manuel Manrique'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 330,
	        	'parroquia' => 'Rafaél Urdaneta'
	        ));
	    //-- de sucre
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 331,
	        	'parroquia' => 'Bobures'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 331,
	        	'parroquia' => 'Gibraltar'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 331,
	        	'parroquia' => 'Heras'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 331,
	        	'parroquia' => 'Monseñor Arturo Álvarez'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 331,
	        	'parroquia' => 'Rómulo Gallegos'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 331,
	        	'parroquia' => 'El Batey'
	        ));
	    //-- de valmore
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 332,
	        	'parroquia' => 'Rafaél Urdaneta'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 332,
	        	'parroquia' => 'La Victoria'
	        ));
	        \DB::table('parroquias')->insert(array(
	        	'id_municipio' => 332,
	        	'parroquia' => 'Raúl Cuenca'
	        ));
    }
}
