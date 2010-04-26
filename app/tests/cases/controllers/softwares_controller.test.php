<?php 
/* SVN FILE: $Id$ */
/* SoftwaresController Test cases generated on: 2010-03-28 13:41:47 : 1269794507*/
App::import('Controller', 'Softwares');

class TestSoftwares extends SoftwaresController {
	var $autoRender = false;
}

class SoftwaresControllerTest extends CakeTestCase {
	var $Softwares = null;

	function startTest() {
		$this->Softwares = new TestSoftwares();
		$this->Softwares->constructClasses();
	}

	function testSoftwaresControllerInstance() {
		$this->assertTrue(is_a($this->Softwares, 'SoftwaresController'));
	}

	function endTest() {
		unset($this->Softwares);
	}
}
?>