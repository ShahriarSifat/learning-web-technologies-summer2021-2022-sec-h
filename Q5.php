<?php

function findodd(){
    echo "Q5:All the odd numbers between 10 to 100 are :";
    for ($i=10; $i <=100; $i++){
        if($i%2!=0){

            echo $i."\r\n  ";
        }
    }
    echo "<br>";


}
findodd();


?>
