<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Raspberry Pi Gpio</title>
    </head>
 	<?php\ufeff<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Raspberry Pi Gpio</title>
    </head>
 	<?php
	system ( "gpio mode 0 out" );
	 system ( "gpio mode 1 out" );
	 system ( "gpio mode 3 out" );
	 system ( "gpio mode 4 out" );
	 
	 
	system ( "gpio write 0 0" );
	 system ( "gpio write 1 0" );
	 system ( "gpio write 3 0" );
	 system ( "gpio write 4 0" );
	 
	 system ( "gpio mode 8 out" );#a
	 system ( "gpio mode 9 out" );#b
	 system ( "gpio mode 7 out" );#c
	 system ( "gpio mode 15 out" );#d
	 system ( "gpio mode 16 out" );#e
	 system ( "gpio mode 12 out" );#f
	 system ( "gpio mode 13 out" );#g
	 system ( "gpio mode 6 out" );#point
	 #mise à zero des pins
	 system ( "gpio write 8 1" );
	 system ( "gpio write 9 1" );
	 system ( "gpio write 7 1" );
	 system ( "gpio write 15 1" );
	 system ( "gpio write 16 1" );
	 system ( "gpio write 12 1" );
	 system ( "gpio write 13 1" );
	 system ( "gpio write 6 1" );
	?>
	
    <body style="background-color: white;">
	<h1>Calculatrice </h1>
	<br />
	<form method="get" action="gpio.php">
	 <input type="text" name="calcul" placeholder="Entrez votre calcul"></input>
	 <input type="submit" value="Envoyer">
	 </form>	 <br />
	
	 
	 
    </body>
