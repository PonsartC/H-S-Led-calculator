<html>
	<body>

<?php
	echo("Affichage des décimales sur le 7 segments:");
	echo("<br />");
	 #mise à zero des pins
	 system ( "gpio write 8 1" );
	 system ( "gpio write 9 1" );
	 system ( "gpio write 7 1" );
	 system ( "gpio write 15 1" );
	 system ( "gpio write 16 1" );
	 system ( "gpio write 12 1" );
	 system ( "gpio write 13 1" );
	 system ( "gpio write 6 1" );

$nombre=$_POST['variable'];
 if (isset($_POST['go'])) 
 {
	$nombre = $nombre*10;
	$nombre = $nombre%10;
	echo($nombre);
	
	switch ($nombre) {
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
}
?>

	
	</body>
</html>
