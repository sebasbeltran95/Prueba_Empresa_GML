<?php 

$myArray= array(1,2,2,4,5,6,7,8,8,8);

$actual= null;
$ocurrencias=0;
$mayor_ocurrencias=0;
$numero_mas_ocurrencias=null;

foreach($myArray as $valor){
  if($valor == $actual) {
	$ocurrencias++;
}else{
  $actual=$valor;
	$ocurrencias=1;
  }
  
  if($ocurrencias > $mayor_ocurrencia){
	$mayor_ocurrencia = $ocurrencias;
	$numero_mas_ocurrencias=$valor;
  }
}

echo "Longest: $mayor_ocurrencia<br>";
echo "Number: $numero_mas_ocurrencias";




