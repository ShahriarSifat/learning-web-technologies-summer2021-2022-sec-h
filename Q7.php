<?php

function shapes(){
    for($i=1;$i<=3;$i++){
        for($j=1;$j<=$i;$j++){
            //echo $j;
            echo "*";
        }
        echo "<br>";
    }

} 
shapes();

?>