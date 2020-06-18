<?php

use \PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase 
{
	public function testSoma()
	{
		$calculadora = new Calculadora();
		$this->assertEquals( 2, $calculadora->soma(1, 1) );
	}

	public function testSomaNegativos()
	{
		$calculadora = new Calculadora();
		$this->assertEquals( -5, $calculadora->soma(-10, 5) );
	}

	public function testSomaErro()
	{
		$calculadora = new Calculadora();
		$this->assertEquals( 60, $calculadora->soma(50, 9) );
	}
}