<?php 
/* SVN FILE: $Id$ */
/* IndexController Test cases generated on: 2010-03-28 13:08:22 : 1269792502*/
App::import('Controller', 'Index');

class TestIndex extends IndexController {
	var $autoRender = false;
}

class IndexControllerTest extends CakeTestCase {
	var $Index = null;

	function startTest() {
		$this->Index = new TestIndex();
		$this->Index->constructClasses();
	}

	function testIndexControllerInstance() {
		$this->assertTrue(is_a($this->Index, 'IndexController'));
	}

	function endTest() {
		unset($this->Index);
	}
}
?>