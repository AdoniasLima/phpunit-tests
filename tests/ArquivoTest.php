<?php

use \PHPUnit\Framework\TestCase;

class ArquivoTest extends TestCase
{	
	/**
	* @expectedException PHPUnit\Framework\Error\Error
	*/
	public function testFalhaNoInclude()
	{
		include 'config.php';
	}

	public function testInclude()
	{	
		$this->assertFalse(file_exists('config.php'));
	}
}