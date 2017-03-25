<?php

$timestamp = time();
$target = date("Ymd", $timestamp);

if ( isPrimeNumber($target)){
	echo 'True';
} else {
	echo 'False';
}


function isPrimeNumber($target) {
	if ( $target < 2 ) {
		return false;
	}

	$max = floor(sqrt($target));
	for ( $i = 2; $i <= $max; $i++ ) {
		if ( $target % $i == 0 ) {
			return false;
		}		
	}
	return true;
}
	
?>
