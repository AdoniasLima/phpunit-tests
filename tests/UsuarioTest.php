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

	public function testIdade()
	{	

		/*
		$usuario = new Usuario();
		$usuario->setIdade(90);

		$this->assertEquals(90, $usuario->getIdade());
		*/
	
		$this->markTestIncomplete("Falta implementar os métodos set e get de idade do usuario.");

	}
}