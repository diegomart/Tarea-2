<html>
 <title > Tarea2 </title>
  <head>

Promedio de Ventas de 20 dias 
    	<meta name="descripcion " content = "Tabla Zebra"/>
	<meta name="KEYWORDS " content = "HTML5,CSS3,JAVASCRIPT"/>
	<TITLE>Practica3</TITLE>
	<LINK REL ="stylesheet"  href= "clasep3.css">
     </head>
  <body>

<?php


  
	
$promedio=0;
$suma=0;
		
	echo "<br><br>Cada dia tubo<br><br> ";
		
	$ventas=array(34.43,45.32,54.32,29.54,93.43
						 ,70.44,69.43,23.54,68.42,65.34
						 ,23.23,45.45,46.69,88.77,67.54
						 ,39.87,87.53,89.74,60.99,99.69);

	foreach ($ventas as $llave => $venta_dia){



		$suma=$suma+$venta_dia;
	echo   $venta_dia."<br>";
	
	}

	$promedio=$suma/20;


	echo "<br><br>El promedio de ventas actual es de ". $promedio;
	
	






?>

</body>


</html>
