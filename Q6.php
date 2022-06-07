<?php


function findinarray(){
    $array = ["Eggs", "Bacon", "HashBrowns", "Beans", "Bread", "RedSauce"];
    for ($i = 0; $i<count($array); $i++) {
        $j=$i+1;
        if($array[$i]=="Beans"){echo "Q6:Found text in position ".$j;}
        


    }
}
findinarray();


?>
