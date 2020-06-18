<?php

use \PHPUnit\Framework\TestCase;

class UsuarioTest extends TestCase 
{	
	public function testExpectNomeCompleto()
	{	

		//Adicionar antes da execução
		$this->expectOutputString("Adonias Lima");

		$usuario = new Usuario();
		$usuario->setNome("Adonias");
		$usuario->setSobrenome("Lima");
		echo $usuario->getNomeCompleto();

	}
}