<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';

function getParams(&$wartosc,&$oprocentowanie,&$lata){
	$wartosc = isset($_REQUEST['wartosc']) ? $_REQUEST['wartosc'] : null;
	$oprocentowanie = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
	$lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
}

function validate(&$wartosc,&$oprocentowanie,&$lata,&$messages){

	if ( ! (isset($wartosc) && isset($oprocentowanie) && isset($lata))) {
		$messages [] = 'Brak wszytskich informacji';
	}
	if ( $wartosc == "") {
		$messages [] = 'Brak kwoty';
	}
	if ( $lata == "") {
		$messages [] = 'Brak czasu';
	}
	if ( $oprocentowanie == "") {
		$messages [] = 'Brak oprocentowania';
	}

	if (empty( $messages )) {
		if (! is_numeric( $wartosc )) {
			$messages [] = 'Kwota to nie liczba';
		}
		if (! is_numeric( $lata )) {
			$messages [] = 'Czas to nie liczba';
		}
		if (! is_numeric( $oprocentowanie )) {
			$messages [] = 'Oprocentowanie to nie liczba';
		}	
	}
	if (empty($messages)){
		return true;
	}
}

function process(&$wartosc,&$oprocentowanie,&$lata,&$messages,&$wys_raty,&$koszt){
	global $role;

	if (empty ( $messages )) { 
		$wartosc = floatval($wartosc);
		$oprocentowanie = floatval($oprocentowanie);
		$lata = floatval($lata);
		$wys_raty = round((($wartosc * ($oprocentowanie/100)) + $wartosc) / ($lata * 12),2);
		$koszt =  $wys_raty * $lata * 12;
	}

	if ($role == 'admin' || ($role == 'user' && $wartosc <= 10000)){
		$koszt = round((($wartosc * ($oprocentowanie/100)) + $wartosc) / ($lata * 12),2);
	}
	if ($role == 'user' && $wartosc > 10000){
		$messages [] = 'Admin może wziąć kredyt na ponad 10k zł';
	}

	return $koszt;
}

$wartosc = null;
$lata = null;
$oprocentowanie = null;
$wys_raty = null;
$koszt = null;
$messages = array();

getParams($wartosc,$oprocentowanie,$lata);
if ( validate($wartosc,$oprocentowanie,$lata,$messages) ) {
	process($wartosc,$oprocentowanie,$lata,$messages,$wys_raty,$koszt);
}

include 'widok.php';