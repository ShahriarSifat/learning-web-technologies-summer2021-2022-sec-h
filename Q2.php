<?php


$amount;
	$vat="vat =";
	function vatCalc($amount){
		return $amount+($amount*(15/100));
	}
	echo "Q2:<b>".$vat.vatCalc(100)."</b><br>";
	
?>