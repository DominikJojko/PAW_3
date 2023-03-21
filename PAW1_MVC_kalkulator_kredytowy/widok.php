<!DOCTYPE HTML>
<html lang="pl">
<head> <meta charset="utf-8" /> <title>Kalkulator kredytowy</title> </head>
<body>

<form action="<?php print(_APP_URL);?> /kalkulator_kredytowy.php" method="get">
	<label for="id_wartosc">Ile chcesz wziąć kredytu? </label>
	<input id="id_wartosc" type="text" name="wartosc" 
	value="<?php if (isset($wartosc)) print($wartosc); ?>" /><br />

	<label for="id_lata">Na ile lat? </label>
    <input id="id_lata" type="text" name="lata" 
	value="<?php if (isset($lata)) print($lata); ?>" /><br />

	<label for="id_oprocentowanie">Jakie oprocentowanie ma podany kredyt? </label>
	<input id="id_oprocentowanie" type="text" name="oprocentowanie" 
	value="<?php if (isset($oprocentowanie)) print($oprocentowanie); ?>" /><br />
	
	<input type="submit" value="Oblicz koszt raty i sumę do spłaty" />
</form>	

<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style=" background-color: red; width:200px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';}
		echo '</ol>';
	}
}
?>

<?php if (isset($wys_raty)){ ?> <div style="background-color: green; width:300px;">
	
<?php 
print
('Wysokość raty to: '.$wys_raty.'zł.'.'<br>
Koszt całkowity do spłacenia '.$koszt.'zł.');  
?>

</div>
<?php } ?>

</body>
</html>