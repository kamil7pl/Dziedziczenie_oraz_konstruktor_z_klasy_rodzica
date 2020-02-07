<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dziedziczenie</title>
</head>
<body>
    <?php
		require_once("klasaDziedziczaca.php");
		$klasa=new klasa(200);
		$klasaDziedziczaca=new klasaDziedziczaca(300);
		$klasaDziedziczaca->ustawWew(341);
		echo $klasaDziedziczaca->pobierzWew()."<br />";
		$klasaDziedziczaca->funkcja_klasa()."<br />";
		echo "Wartość dodatkowej zmiennej publicznej w klasie klasaDziedziczaca to ".$klasaDziedziczaca->dodatkowa_zmienna.".<br />";
		echo "Wartość zmiennej publicznej w klasie klasa to ".$klasaDziedziczaca->zmiennaKlasa.".<br />";
		
		
	?>
</body>
</html>