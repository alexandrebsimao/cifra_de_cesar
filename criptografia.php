<?php
	$key = 5;
	$phrase = 'TESTE';

	$alpha = array(
		'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'
		);

	$cont = count($alpha) - 1;

	$phrase = str_split($phrase);

	$crypt = '';
	foreach ($phrase as $v) {
		$k_alpha = array_search($v, $alpha);
		$k_alpha = $k_alpha + $key;

		if( $k_alpha >= 25 ){
			$k_alpha = $k_alpha - $cont;
		}
		$crypt .= $alpha[$k_alpha];
		// var_dump($k_alpha);
	}

	var_dump($crypt);
	// array_search

	$phrase = str_split($crypt);

	$decrypt = '';
	foreach ($phrase as $v) {
		$k_alpha = array_search($v, $alpha);
		$k_alpha = $k_alpha - $key;

		if( $k_alpha < 0 ){
			$k_alpha = $k_alpha + $cont;
		}
		$decrypt .= $alpha[$k_alpha];
		// var_dump($k_alpha);
	}

	var_dump($decrypt);

?>
