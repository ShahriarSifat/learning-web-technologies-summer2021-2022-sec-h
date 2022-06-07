<?php

$length;
	$width;
	
	function area($length, $width){
		return $length*$width;
	}
	
	//echo area(20,10);
	// echo "area =".$length*$width;
	// echo " perimeter=".(2*($length+$width));
	function perimeter($length, $width){
		return (2*($length+$width));
	}
	
	echo "Q1:<b>area=".area(20,10)."\r\n </b><br>";
	echo"Q1:<b>perimeter=".perimeter(10,20)."\r\n </b><br>";
	




?>