<?php 
/* SVN FILE: $Id$ */
/* CategoriasController Test cases generated on: 2010-03-28 13:50:12 : 1269795012*/
App::import('Controller', 'Categorias');

class TestCategorias extends CategoriasController {
	var $autoRender = false;
}

class CategoriasControllerTest extends CakeTestCase {
	var $Categorias = null;

	function startTest() {
		$this->Categorias = new TestCategorias();
		$this->Categorias->constructClasses();
	}

	function testCategoriasControllerInstance() {
		$this->assertTrue(is_a($this->Categorias, 'CategoriasController'));
	}

	function endTest() {
		unset($this->Categorias);
	}
}
?>