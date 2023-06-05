<?php 

$myArray = array(1,2,1,3,3,1,2,1,5,1);

$histograma=[
    1=>0,2=>0,3=>0,4=>0,5=>0
    ];
    foreach($myArray as $numero){
      $histograma[$numero]++;
    }
    
    foreach($histograma as $clave=> $cantidad ){
      echo "$clave: ";
      for($x=0;$x < $cantidad; $x++){
        echo "*";
      }
      echo "<br>";
    }
