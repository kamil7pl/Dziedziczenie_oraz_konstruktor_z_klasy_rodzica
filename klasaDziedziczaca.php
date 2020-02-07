<?php
require_once("klasa.php");
class klasaDziedziczaca extends klasa{
	
	public $dodatkowa_zmienna=10;
	
	public function __construct($x){
		echo "Utworzenie nowej instancji klasy klasaDziedziczaca. Konstruktor tej klasy z parametrem ".$x.".<br />";
		echo "Uruchomienie konstruktora z klasy klasa poniżej.<br />";
		parent::__construct($x);
	}
}
?>