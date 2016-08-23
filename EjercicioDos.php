<html>
<head>
	<title></title>
</head>
<body>

<?php

echo date("d/m/y");
echo "</br>";
echo date("F j, Y, g:i a");
echo "</br>";                 
echo date("m.d.y");
echo "</br>";                        
echo date("j, n, Y");
echo "</br>";                      
echo date("Ymd");
echo "</br>";                          
echo date('h-i-s, j-m-y, it is w Day');     
echo "</br>";
echo date('\i\t \i\s \t\h\e jS \d\a\y.');   
echo "</br>";
echo date("D M j G:i:s T Y");              
echo "</br>";
echo date('H:m:s \m \i\s\ \m\o\n\t\h');     
echo "</br>";
echo date("H:i:s");                        
echo "</br>";
echo date("Y-m-d H:i:s");
echo "</br>";

$mes = date("m");

switch($mes)
{
    case 1 :
             echo "verano";

    case 8 :
             echo "</br>";
             echo "Estamos en Invierno";        
}                  

?>

</body>
</html>