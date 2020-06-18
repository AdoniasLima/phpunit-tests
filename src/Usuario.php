<?php

class Usuario
{
	
	private $s_nome;
	private $s_sobrenome;

	public function setNome($nome)
	{
		$this->s_nome = $nome;
	}
	
	public function setSobrenome($sobrenome)
	{
		$this->s_sobrenome = $sobrenome;
	}

	public function getNomeCompleto()
	{
		echo $this->s_nome . " " . $this->s_sobrenome;
	}
}