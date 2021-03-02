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
?>