<?php
	 include '../controller/logincheck.php';
	$key = $_GET["1234"];
	$canditates = search($key);
	$conn = getconnection();
    $sql = "select id,name from users";
    $result = mysqli_query($conn, $sql);
	if(count($canditates) > 0){
		foreach($canditates as $c){
			echo "id=".$c["id"].".".$c["name"]."br>";
		}
	}
?>