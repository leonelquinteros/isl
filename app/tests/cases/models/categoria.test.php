<?php 
/* SVN FILE: $Id$ */
/* Categoria Test cases generated on: 2010-03-28 13:30:36 : 1269793836*/
App::import('Model', 'Categoria');

class CategoriaTestCase extends CakeTestCase {
	var $Categoria = null;
	var $fixtures = array('app.categoria', 'app.categoria');

	function startTest() {
		$this->Categoria =& ClassRegistry::init('Categoria');
	}

	function testCategoriaInstance() {
		$this->assertTrue(is_a($this->Categoria, 'Categoria'));
	}

	function testCategoriaFind() {
		$this->Categoria->recursive = -1;
		$results = $this->Categoria->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Categoria' => array(
			'id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'id_padre' => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>