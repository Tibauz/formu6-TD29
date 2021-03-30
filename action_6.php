<html>
	<body>
		<?php
		echo "Bienvenue, ";
		echo $_GET["prénom"], $_GET["nom"], " ! ";
		date_default_timezone_set("Europe/Paris");
		$date=date("d/m/Y");
		echo "Tu es en ", $_GET["classe"];
		echo "<br><br> Nous sommes le : ", $date ;
		echo ". Il est : ";
		echo date("H:i:s");
		$s = $_GET["n1"]+$_GET["n2"];
		$p = $_GET["n1"]*$_GET["n2"];
		echo "<br><br> " , $_GET["n1"] , " + ", $_GET["n2"] , " = " , $s ;
		$x = 0;
		if ($s!=$_GET["a"]) {
			echo "<br><i>Attention tu avais écrit </i>" ;
			echo $_GET["a"] ;
			$x += 1;}
		if ($s==$_GET["a"]) {
			echo "<br><i>Bravo tu avais écrit la bonne réponse !</i>" ; }
		echo "<br><br> " . $_GET["n1"] . " x ". $_GET["n2"] . " = " . $p ;
		if ($p!=$_GET["m"]) {
			echo "<br><i>Attention tu avais écrit </i>" ;
			echo $_GET["m"] ;
			$x += 1;}
		if ($p==$_GET["m"]) {
			echo "<br><i>Bravo tu avais écrit la bonne réponse !</i>" ; }
		if ($x==0) {
			echo "<br>Bravo ", $_GET["prénom"], " tu n'as fait aucune erreur !" ;
		}
		if ($x!==0) {
			echo "<br>Attention ", $_GET["prénom"], " tu as fait ", $x , " erreurs, il faudrait peut être revoir ta leçon...";
		}
		?>
	</body>
</html>