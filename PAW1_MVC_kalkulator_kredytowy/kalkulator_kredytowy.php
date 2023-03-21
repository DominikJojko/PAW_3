<?php
require_once dirname(__FILE__).'/config.php';

$lata = $_REQUEST ['lata'];
$wartosc = $_REQUEST ['wartosc'];
$oprocentowanie = $_REQUEST ['oprocentowanie'];

if ( ! (isset($wartosc) && isset($oprocentowanie) && isset($lata))) {$messages [] = 'Brak wszytskich informacji';}
if ( $wartosc == "") {$messages [] = 'Brak kwoty';}
if ( $lata == "") {$messages [] = 'Brak czasu';}
if ( $oprocentowanie == "") {$messages [] = 'Brak oprocentowania';}

if (empty( $messages )) {
	if (! is_numeric( $wartosc )) {$messages [] = 'Kwota to nie liczba';}
	if (! is_numeric( $lata )) {$messages [] = 'Czas to nie liczba';}
	if (! is_numeric( $oprocentowanie )) {$messages [] = 'Oprocentowanie to nie liczba';}	
}

if (empty ( $messages )) { 
	$wartosc = floatval($wartosc);
	$oprocentowanie = floatval($oprocentowanie);
	$lata = floatval($lata);
	$wys_raty = round((($wartosc * ($oprocentowanie/100)) + $wartosc) / ($lata * 12),2);
	$koszt =  $wys_raty * $lata * 12;
}
include 'widok.php';