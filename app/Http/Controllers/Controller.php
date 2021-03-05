<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function ubicaciones($estados){

    	$json = Array();

        foreach ($estados as $key) {

            $data = [
                'id'     => $key->id,
                'estado' => $key->estado
            ];

            $municipios = Array();

            foreach ($key->municipios as $key2) {
                
                $data2 = [
                    'id' => $key2->id,
                    'municipio' => $key2->municipio
                ];

                $parroquias = Array();

                foreach ($key2->parroquias as $key3) {
                    $data3=[
                        'id'     => $key3->id,
                        'parroquia' => $key3->parroquia
                    ];

                    array_push($parroquias, $data3);
                }

                $data2['parroquias'] = $parroquias;

                array_push($municipios, $data2);
            }

            $data['municipios'] = $municipios;

            array_push($json, $data);
        }

        $json = json_encode($json);

        return $json;
    }
}
