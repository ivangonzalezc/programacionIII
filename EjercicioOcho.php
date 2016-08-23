<html>
<head>
	<title></title>
</head>
<body>

<?php

$array = array(
  	1 => 90, 
    30 => 7, 
    'e' => 99,
    'hola' => 'mundo',
);
           
// var_dump($array); ----> muestra el array con todos los valores

foreach ($array as $valor) 
{
	echo $valor;
	echo "</br>";
}

?>

</body>
</html>