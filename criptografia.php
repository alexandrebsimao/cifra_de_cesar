<?php
	/*		
		*** Cifrador de César ***
		Algoritmo tem como objetivo mover uma letra 
		em um número de casas determinado pela chave
	*/

	$key = 3; // Chave definida 
	$phrase = 'FRASE AQUI';

	$alpha = array(
		1  => 'A',
		2  => 'B',
		3  => 'C',
		4  => 'D',
		5  => 'E',
		6  => 'F',
		7  => 'G',
		8  => 'H',
		9  => 'I',
		10 => 'J',
		11 => 'K',
		12 => 'L',
		13 => 'M',
		14 => 'N',
		15 => 'O',
		16 => 'P',
		17 => 'Q',
		18 => 'R',
		19 => 'S',
		20 => 'T',
		21 => 'U',
		22 => 'V',
		23 => 'W',
		24 => 'X',
		25 => 'Y',
		26 => 'Z'
		);

	$cont = count($alpha) - 1;

	$phrase = str_split($phrase);

	$crypt = '';
	foreach ($phrase as $v) {
		$k_alpha = array_search($v, $alpha);

		if( $k_alpha ){
			$k_alpha = $k_alpha + $key;

			if( $k_alpha >= 25 ){
				$k_alpha = $k_alpha - $cont;
			}
			$crypt .= $alpha[$k_alpha];
		}else{
			$crypt .= $v;
		}
		// var_dump($k_alpha);
	}

	var_dump($crypt);
	// array_search

	$phrase = str_split($crypt);

	$decrypt = '';
	foreach ($phrase as $v) {
		$k_alpha = array_search($v, $alpha);

		if( $k_alpha ){
			$k_alpha = $k_alpha - $key;

			if( $k_alpha < 0 ){
				$k_alpha = $k_alpha + $cont;
			}
			$decrypt .= $alpha[$k_alpha];
			// var_dump($k_alpha);
		}else{
			$decrypt .= $v;
		}
	}

	var_dump($decrypt);

?>
