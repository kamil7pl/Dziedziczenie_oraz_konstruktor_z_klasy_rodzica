<?php
class klasa{
	protected $zmienna=35; //Zmienna dostępna z klasy, która dziedziczy, ale nie dostępna z instancji klasy.
	private $wew=4;//Zmienna dostępna tylko wewnątrz klasy.
	public $zmiennaKlasa=23;
	public function __construct($parametr){
		echo "Utworzenie nowej instancji klasy klasa. Konstruktor tej klasy z parametrem ".$parametr.".<br />";
	}
	public function funkcja_klasa(){
		echo "Funkcja funkcja_klasa(), która jest dziedziczona tak jak wszystkie publiczne funkcje w klasie klasa.<br />";
	}
	public function ustawWew($wew){
		$this->wew=$wew;
	}
	public function pobierzWew(){
		return $this->wew;
	}
}
?>