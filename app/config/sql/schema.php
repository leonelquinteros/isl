<?php 
/* SVN FILE: $Id$ */
/* App schema generated on: 2010-04-13 20:04:48 : 1271202288*/
class AppSchema extends CakeSchema {
	var $name = 'App';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $categorias = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'id_padre' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'url' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'Padre' => array('column' => 'id_padre', 'unique' => 0), 'Url' => array('column' => 'url', 'unique' => 0))
	);
	var $softwares = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'url' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'descripcion' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'website_url' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'download_url' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'id_categoria' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'Categoria' => array('column' => 'id_categoria', 'unique' => 0), 'Url' => array('column' => 'url', 'unique' => 0))
	);
	var $users = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'key' => 'index'),
		'password' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 40),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'Username' => array('column' => 'username', 'unique' => 0))
	);
}
?>