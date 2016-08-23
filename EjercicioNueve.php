<html>
<head>
	<title></title>
</head>
<body>

<?php

$lapicera = array("color"=>"Rojo","marca"=>"Bic","trazo"=>"Fino","precio"=>"$7.5");

foreach ($lapicera as $l)
{
  echo $l." ";
 
}

$lapicera = array("color"=>"Negro","marca"=>"Pelican","trazo"=>"Grueso","precio"=>"$10");

echo "</br>";echo "</br>";
foreach ($lapicera as $l)
{
  echo $l." ";
}

$lapicera = array("color"=>"Azul","marca"=>"Faber","trazo"=>"Fino","precio"=>"$5");

echo "</br>";echo "</br>";
foreach ($lapicera as $l)
{
  echo $l." ";
}

?>

</body>
</html>