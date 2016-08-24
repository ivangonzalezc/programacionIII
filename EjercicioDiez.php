<html>
<head>
	<title></title>
</head>
<body>

<?php

$lapicera1 = array("color"=>"Rojo","marca"=>"Bic","trazo"=>"Fino","precio"=>"$7.5");
$lapicera2 = array("color"=>"Negro","marca"=>"Pelican","trazo"=>"Grueso","precio"=>"$10");
$lapicera3 = array("color"=>"Azul","marca"=>"Faber","trazo"=>"Fino","precio"=>"$5");

$lapiceras = array($lapicera1, $lapicera2, $lapicera3);


foreach ($lapiceras as $lapicera)
{
	foreach ($lapicera as $valores) 
	{
		echo $valores." ";
	}
	
	echo "</br>";echo "</br>";

	echo $lapicera["color"]." ".$lapicera["marca"];

	echo "</br>";echo "</br>";
}

// var_dump($lapiceras);

?>

</body>
</html>