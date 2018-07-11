<?php

class Form {

	private $name;
	private $type;
	private $tag;

	public function __construct ($data = array()){
		$this->data = $data;


	}


	public function setTag($tag){
		$this->tag = $tag;

	}


	private function surround ($field){
		return '<' . $this->tag . '>' . $field . '</' . $this->tag . '>';

	}

	private function getValue($index){
		return isset ($this->data[$index]) ? $this->data[$index] : NULL;
	}


	public function input($name, $type){
		return $this->surround('<input type="' . $type . '" name="' . $name .'" value="' . $this->getValue($name) . '">');
	}

	public function submit(){
		return $this->surround('<button type="submit">Submit</button>');
	}



}