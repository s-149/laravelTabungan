<?php 

function rp($rp){
	$rupiah = 'Rp ' . number_format($rp, 0, ',', '.' );
	
	return $rupiah;
}

 ?>