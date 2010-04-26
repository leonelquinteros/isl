<?php 
/* SVN FILE: $Id$ */
/* Software Fixture generated on: 2010-03-28 13:40:47 : 1269794447*/

class SoftwareFixture extends CakeTestFixture {
	var $name = 'Software';
	var $table = 'softwares';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nombre' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'descripcion' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'website_url' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'download_url' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'id_categoria' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'Categoria' => array('column' => 'id_categoria', 'unique' => 0))
	);
	var $records = array(array(
		'id' => 1,
		'nombre' => 'Lorem ipsum dolor sit amet',
		'descripcion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'website_url' => 'Lorem ipsum dolor sit amet',
		'download_url' => 'Lorem ipsum dolor sit amet',
		'id_categoria' => 1
	));
}
?>