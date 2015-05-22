<?php
Class Usuario{
	
	private $nome;
	private $cidade;
	private $telefone;
	private $cargo;
	
	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome=$nome;
	}
	
	public function getCidade(){
		return $this->cidade;
	}
	
	public  function setCidade($cidade){
		$this->cidade=$cidade;
	}
	
	public function getTelefone(){
		return $this->telefone;
	}
	
	public function setTelefone($telefone){
		$this->telefone=$telefone;
	}
	
	public function getCargo(){
		return $this->cargo;
	}
	
	public function setCargo($cargo){
		$this->cargo=$cargo;
	}
}