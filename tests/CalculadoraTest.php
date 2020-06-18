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

	/**
	* @dataProvider somaDataProvider
	*/
	public function testeSomarDataProvider($numero1, $numero2, $esperado)
	{
		$calculadora = new Calculadora();
		$this->assertEquals( $esperado, $calculadora->soma($numero1, $numero2) );
	}

	public function somaDataProvider()
	{
		return array(
			array(1, 1, 2),
			array(20, 10, 30),
			array(-100, 30, -70),
			array(10.5, 0.5, 11.0)
		);
	}
}