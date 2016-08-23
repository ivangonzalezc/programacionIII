<html>
<head>
	<title></title>
</head>
<body>

<?php

    $suma = 0;
    $contador = 1;

    while($suma <= 1000)
    {
    	

    	if($suma + $contador >= 1000)
    	{
    		break;
    	}	
    	else
    	{
    	echo $contador;
    	echo "</br>";
    	$suma =  $suma + $contador;
    	$contador = $contador +1 ;
    	}

    }	

    echo "La suma es :".$suma;
    echo "</br>";
    echo "Se sumaron ".$contador." numeros";

?>

</body>
</html>