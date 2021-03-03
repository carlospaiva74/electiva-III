<?php 
	function generar_code($n){
   		$pattern = '123456789';
   		$key = '';
        $max = strlen($pattern)-1;
        	for($j=0; $j <$n ;$j++) {
                $key .= $pattern{mt_rand(0,$max)};
                              
        	}
        return $key;
   }

   function money($precio){

   	return '$ '.number_format($precio, 2, ",", ".") ;
   }

   function count_carrito(){

      $carrito = \Session::get('carrito');

      if ($carrito==NULL or $carrito=='') {
          $carrito=array();
      }

      $contador = count($carrito);
      return $contador;
    }

    function check_carrito($id){

      if (count_carrito()==0) {
        return false;
      }

      $carrito = \Session::get('carrito');

      if ($carrito==NULL or $carrito=='') {
          $carrito=array();
      }

      $array = Array();

      foreach ($carrito as $key) {
        array_push($array, $key['producto']);
      }

      return in_array($id, $array);

    }
?>