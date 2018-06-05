

<html>
	<body>

<?php
	echo("La solution de votre calcul est:");
	echo("<br />");
	 if($_GET["calcul"])
	 {
		
		echo("<br />");
		$reponse = eval("return ".$_GET["calcul"].";");
		echo $reponse;
	 
	 }
	else {echo ("fail");}
	
	#Calcul dizaine/unite
	$dizaine = ($reponse / 10)%10;
	$unite = $reponse % 10;
	#if(&reponse/100 != 0){} si>99
	
	
	#ouvrir gpio
	 system ( "gpio mode 0 out" );
	 system ( "gpio mode 1 out" );
	 system ( "gpio mode 3 out" );
	 system ( "gpio mode 4 out" );
	 
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
	
	#Affichage gpio/dizaine 0 1 3 4 
	if($dizaine>=1){system ( "gpio write 0 1" );}
	if($dizaine>=2){system ( "gpio write 1 1" );}
	if($dizaine>=3){system ( "gpio write 3 1" );}
	if($dizaine>=4){system ( "gpio write 4 1" );}			
	
	#nombre à virgule
	if(intval($reponse) != $reponse){system ( "gpio write 6 0" );}
	
	#Affichage 7seg/unite a=8 b=9 c=7 d=15 e=16 f=12 g=13 
	switch ($unite) {
    case 0:
        system ( "gpio write 8 0" );
		system ( "gpio write 9 0" );
		system ( "gpio write 7 0" );
		system ( "gpio write 15 0" );
		system ( "gpio write 16 0" );
		system ( "gpio write 12 0" );
        break;
    case 1:
        system ( "gpio write 9 0" );
		system ( "gpio write 7 0" );
        break;
    case 2:
        system ( "gpio write 8 0" );
		system ( "gpio write 9 0" );
		system ( "gpio write 15 0" );
		system ( "gpio write 16 0" );
		system ( "gpio write 13 0" );
        break;
	case 3:
		system ( "gpio write 8 0" );
		system ( "gpio write 9 0" );
		system ( "gpio write 7 0" );
		system ( "gpio write 15 0" );
		system ( "gpio write 13 0" );
		break;
	case 4:
		system ( "gpio write 9 0" );
		system ( "gpio write 7 0" );
		system ( "gpio write 12 0" );
		system ( "gpio write 13 0" );
        break;
    case 5:
        system ( "gpio write 8 0" );
		system ( "gpio write 7 0" );
		system ( "gpio write 15 0" );
		system ( "gpio write 12 0" );
		system ( "gpio write 13 0" );
        break;
    case 6:
		system ( "gpio write 8 0" );
		system ( "gpio write 7 0" );
		system ( "gpio write 15 0" );
		system ( "gpio write 16 0" );
		system ( "gpio write 12 0" );
		system ( "gpio write 13 0" );
        break;
	case 7:
		system ( "gpio write 8 0" );
		system ( "gpio write 9 0" );
		system ( "gpio write 7 0" );
		break;
	case 8:
        system ( "gpio write 8 0" );
		system ( "gpio write 9 0" );
		system ( "gpio write 7 0" );
		system ( "gpio write 15 0" );
		system ( "gpio write 16 0" );
		system ( "gpio write 12 0" );
		system ( "gpio write 13 0" );
        break;
	case 9:
		system ( "gpio write 8 0" );
		system ( "gpio write 9 0" );
		system ( "gpio write 7 0" );
		system ( "gpio write 15 0" );
		system ( "gpio write 12 0" );
		system ( "gpio write 13 0" );
		break;
		
	}
	#############################
?> 
	
	<br />
	
	<form action="decimales.php" method="post">
		<input type="hidden" name="variable" value="<?php echo $reponse; ?>">
		<input type="submit" name="go" value="Afficher decimales">
	</form>

	<form>
		<input type="button" value="Nouveau calcul" onclick="window.location.href='http://10.10.10.232/index.php'">
	</form>
	

	
	
	</body>
	</html>

