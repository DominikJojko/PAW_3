<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Kalkulator kredytowy</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>
    <div style="width:90%; margin: 2em auto;">
        <a href="<?php echo(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
    </div>

    <form action="<?php echo(_APP_URL);?>/app/kalkulator_kredytowy.php" method="get">
        <label for="id_wartosc">Ile chcesz wziąć kredytu? </label>
        <input id="id_wartosc" type="text" name="wartosc" value="<?php if (isset($wartosc)) echo $wartosc; ?>" /><br />

        <label for="id_lata">Na ile lat? </label>
        <input id="id_lata" type="text" name="lata" value="<?php if (isset($lata)) echo $lata; ?>" /><br />

        <label for="id_oprocentowanie">Jakie oprocentowanie ma podany kredyt? </label>
        <input id="id_oprocentowanie" type="text" name="oprocentowanie" value="<?php if (isset($oprocentowanie)) echo $oprocentowanie; ?>" /><br />

        <input type="submit" name="submit" value="Oblicz koszt raty i sumę do spłaty" />
    </form>

    <?php if (isset($messages)) {
        if (count($messages) > 0) {
            echo '<ol style="background-color: red; width:200px;">';
            foreach ($messages as $key => $msg) {
                echo '<li>'.$msg.'</li>';
            }
            echo '</ol>';
        }
    } ?>

<?php if (isset($wys_raty)) { ?>
    <div style="background-color: green; width:300px;">
        Wysokość raty to: <?php echo $wys_raty; ?> zł. <br>
        <?php if (isset($koszt)) { ?>
            Koszt całkowity do spłacenia <?php echo $koszt; ?> zł.
        <?php } ?>
    </div>
<?php } ?>


</body>
</html>
