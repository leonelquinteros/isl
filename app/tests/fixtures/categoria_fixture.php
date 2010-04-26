<?php 
/* SVN FILE: $Id$ */
/* Categoria Fixture generated on: 2010-03-28 13:30:36 : 1269793836*/

class CategoriaFixture extends CakeTestFixture {
	var $name = 'Categoria';
	var $table = 'categorias';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nombre' => array('type'=>'string', 'null' => false, 'default' => NULL),
		'id_padre' => array('type'=>'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'Padre' => array('column' => 'id_padre', 'unique' => 0))
	);
	var $records = array(array(
		'id' => 1,
		'nombre' => 'Lorem ipsum dolor sit amet',
		'id_padre' => 1
	));
}
?>