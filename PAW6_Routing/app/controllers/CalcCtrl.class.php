<?php
namespace app\controllers;
use app\forms\CalcForm;
use app\transfer\Calcwys_raty;

class CalcCtrl {

	private $form;
	private $wys_raty;
	private $msgs;

	public function __construct(){
		$this->form = new CalcForm();
		$this->wys_raty = new Calcwys_raty();
	}

	public function getParams(){
		$this->form->wartosc = getFromRequest('wartosc');
		$this->form->lata = getFromRequest('lata');
		$this->form->oprocentowanie = getFromRequest('oprocentowanie');
	}

	public function validate() {
		if (! (isset ( $this->form->wartosc ) && isset ( $this->form->lata ) && isset ( $this->form->oprocentowanie ))) {
			return false;
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->wartosc == "") {
			getMessages()->addError('nie ma wartosci kredytu');
		}
		if ($this->form->lata == "") {
			getMessages()->addError('Nie podano lat');
		}
		if ($this->form->oprocentowanie == "") {
			getMessages()->addError('Nie podano oprocentowanie');
		}
		
		if (! getMessages()->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->wartosc )) {
				getMessages()->addError('wartosc to nie liczba');
			}
			
			if (! is_numeric ( $this->form->lata )) {
				getMessages()->addError('lata to nie liczba');
			}

			if (! is_numeric ( $this->form->oprocentowanie )) {
				getMessages()->addError('oprocentowanie to nie liczba');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	public function action_calcCompute(){

		$this->getParams();
		
		if ($this->validate()) {
				
			$this->form->wartosc = intval($this->form->wartosc);
			$this->form->lata = intval($this->form->lata);
			$this->form->oprocentowanie = intval($this->form->oprocentowanie);
				
			if (inRole('admin')){
				$this->wys_raty->wys_raty = round((($this->form->wartosc * ($this->form->oprocentowanie/100)) + $this->form->wartosc)/ ($this->form->lata * 12),2);
				$this->wys_raty->koszt =  $this->wys_raty->wys_raty * $this->form->lata * 12;
				getMessages()->addInfo('Wykonano obliczenia.');
			}
			if (inRole('user') && $this->form->wartosc <= 10000){
				$this->wys_raty->wys_raty = round((($this->form->wartosc * ($this->form->oprocentowanie/100)) + $this->form->wartosc)/ ($this->form->lata * 12),2);
				$this->wys_raty->koszt =  $this->wys_raty->wys_raty * $this->form->lata * 12;
				getMessages()->addInfo('Wykonano obliczenia.');
			}
			if (inRole('user') && $this->form->wartosc > 10000){
				getMessages()->addError('Tylko administrator może obliczyć ratę dla kwoty kredytu powyżej 10000zł!');
			}
			
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	public function action_calcKomunikat(){
		getMessages()->addInfo('Jesteś zalogowany. Wprowadź dane.');
		$this->generateView();
	}
	
	public function generateView(){
		getSmarty()->assign('user',unserialize($_SESSION['user']));
		getSmarty()->assign('page_title','Strona główna');
		getSmarty()->assign('page_description','Routing');
		getSmarty()->assign('page_header','Kalkulator kredytowy');	
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->wys_raty);
		getSmarty()->display('CalcView.tpl');
}
}
