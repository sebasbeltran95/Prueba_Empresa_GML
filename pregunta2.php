<?php 

$n = 5;

for($filas =0; $filas < $n; $filas++){
  
    for($columnas=0;$columnas < $n; $columnas++){
      
      if($filas == $columnas || $filas + $columnas == $n -1)
        echo "X";
      else
      echo "_";	  
      }
    echo "<br>";
  }