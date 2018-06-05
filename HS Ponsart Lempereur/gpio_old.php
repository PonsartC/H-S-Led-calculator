

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
	 system ( "gpio mode 0 out" );
	 system ( "gpio mode 1 out" );
	 system ( "gpio mode 2 out" );
	 system ( "gpio mode 3 out" );
	 system ( "gpio mode 4 out" );
	 system ( "gpio mode 5 out" );
	if($reponse>=1){system ( "gpio write 0 1" );}
	if($reponse>=2){system ( "gpio write 2 1" );}
	if($reponse>=3){system ( "gpio write 3 1" );}
	if($reponse>=4){system ( "gpio write 1 1" );}			
	if($reponse>=5){system ( "gpio write 4 1" );}
	if($reponse>=6){system ( "gpio write 5 1" );}
?> 
	
	<br />
	<form>
		<input type="button" value="Nouveau calcul" onclick="window.location.href='http://10.10.10.183/index.php'">
	</form>
	
	
	</body>
	</html>
