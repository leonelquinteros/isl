<?php 
/* SVN FILE: $Id$ */
/* Software Test cases generated on: 2010-03-28 13:40:49 : 1269794449*/
App::import('Model', 'Software');

class SoftwareTestCase extends CakeTestCase {
	var $Software = null;
	var $fixtures = array('app.software', 'app.categoria');

	function startTest() {
		$this->Software =& ClassRegistry::init('Software');
	}

	function testSoftwareInstance() {
		$this->assertTrue(is_a($this->Software, 'Software'));
	}

	function testSoftwareFind() {
		$this->Software->recursive = -1;
		$results = $this->Software->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Software' => array(
			'id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'descripcion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'website_url' => 'Lorem ipsum dolor sit amet',
			'download_url' => 'Lorem ipsum dolor sit amet',
			'id_categoria' => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>