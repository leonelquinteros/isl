<?php 
/* SVN FILE: $Id$ */
/* SoftwareController Test cases generated on: 2010-03-28 13:09:53 : 1269792593*/
App::import('Controller', 'Software');

class TestSoftware extends SoftwareController {
	var $autoRender = false;
}

class SoftwareControllerTest extends CakeTestCase {
	var $Software = null;

	function startTest() {
		$this->Software = new TestSoftware();
		$this->Software->constructClasses();
	}

	function testSoftwareControllerInstance() {
		$this->assertTrue(is_a($this->Software, 'SoftwareController'));
	}

	function endTest() {
		unset($this->Software);
	}
}
?>