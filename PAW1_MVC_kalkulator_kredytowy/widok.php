<!DOCTYPE HTML>
<html lang="pl">
<head> <meta charset="utf-8" /> <title>Kalkulator kredytowy</title> </head>
<body>

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