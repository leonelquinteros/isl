<?php
class Categoria extends AppModel {

    var $name = 'Categoria';
    var $validate = array(
            'url' => array(
            			'unique' => array(
    							'rule' 		=> 'isUnique',
    							'message' 	=> 'La URL ingresada ya se encuentra en uso, seleccione una diferente.'
    					)
    		)
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed
    var $hasMany = array(
            'SubCategorias' => array(
                    'className' => 'Categoria',
                    'foreignKey' => 'id_padre',
                    'order' => 'nombre',
            ),
            'Software' => array(
                    'className' => 'Software',
                    'foreignKey' => 'id_categoria',
                    'order' => 'nombre',
            ),
    );

    var $belongsTo = array(
            'Padre' => array(
                'className' => 'Categoria',
                'foreignKey' => 'id_padre',
            )
    );

    function beforeValidate() {
        $this->data['Categoria']['url'] = Inflector::slug(strtolower($this->data['Categoria']['url']), '-');

        if(empty($this->data['Categoria']['url'])) {
            $this->data['Categoria']['url'] = Inflector::slug(strtolower($this->data['Categoria']['nombre']), '-');
        }

        if(empty($this->data['Categoria']['url']) && !empty($this->data['Categoria']['id'])) {
            $this->data['Categoria']['url'] = $this->data['Categoria']['id'];
        }
    }
	
	function getBreadcrumb($id) {
        $recursive = $this->recursive;
        $this->recursive = -1;

    	$breadcrumb = array();
    	$cat = $this->findById($id);
    	$breadcrumb[$cat['Categoria']['nombre']  . '<span id="Cat' . $cat['Categoria']['id'] . '"></span>'] = '/categoria/' . $cat['Categoria']['url'];
    	
    	if(!empty($cat['Categoria']['id_padre'])) {
	    	$padre = $this->findById($cat['Categoria']['id_padre']);
	    	$breadcrumb[$padre['Categoria']['nombre'] . '<span id="Cat' . $padre['Categoria']['id'] . '"></span>'] = '/categoria/' . $padre['Categoria']['url'];
	    	 
	    	while(!empty($padre['Categoria']['id_padre'])) {
		    	$padre = $this->findById($padre['Categoria']['id_padre']);
		    	$breadcrumb[$padre['Categoria']['nombre'] . '<span id="Cat' . $padre['Categoria']['id'] . '"></span>'] = '/categoria/' . $padre['Categoria']['url'];
	    	}
    	}
    	
    	$breadcrumb['Inicio'] = '/';

        $this->recursive = $recursive;
    	return array_reverse($breadcrumb);
    }

    function getFullName($id, $separator = ' &raquo; ') {
        $aPath = array_keys( $this->getBreadcrumb($id) );
        array_shift($aPath);

        if(is_null($separator)) {
            $separator = ' &raquo; ';
        }

        return implode($separator, $aPath);
    }
}
