<?php

$array = [
    ['1','2','3','A'],
    ['1','2','B','C'],
    ['1','D','E','F'],	
];
// echo $array[0];
function arrayShapes($array[]){
    for($i=0;$i<=count($array[]);$i++){
        for($j=0;$j<=3-$i;$j++){
            echo $array[$i],[$j];
        }
        echo "<br>";
    }
}

arrayShapes($array[]);


?>