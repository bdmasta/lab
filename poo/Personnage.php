<?php

class Personnage{

	private $vie = 40;
	private $atk = 20;
	private $nom;
	private $cible;

	public function __construct($nom){
		$this->nom = $nom;
	}

	public function getVie(){
		return $this->vie;
	}

	public function getAtk(){
		return $this->atk;
	}

	public function getNom(){
		return $this->nom;
	}

	public function setVie($vie){
		$this->vie = $vie;
	}

	public function setNom($nom){
		$this->nom = $nom;

	}


}
