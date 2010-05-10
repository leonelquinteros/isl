<?php
class Software extends AppModel {
    var $name = 'Software';
    var $validate = array(
            'nombre' => array(
            				'notempty' => array(
    							'rule' 		=> 'notempty',
    							'message' 	=> 'Debe ingresar un nombre.'
    						)
    				),
            'url' => array(
            				'unique' => array(
            					'rule'		=> 'isUnique',
            					'message' 	=> 'La URL ingresada ya se encuentra en uso, seleccione una diferente.'
    						)
    				),
            'website_url' => array(
            				'url' => array(
    							'rule' 		=> 'url',
    							'message'	=> 'La URL ingresada no es una URL'
    						)
    				),
            'download_url' => array(
            				'url' => array(
    							'rule' 		=> 'url',
    							'message'	=> 'La URL ingresada no es una URL'
    						)
    				),
            'id_categoria' => array('numeric')
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed
    var $belongsTo = array(
            'Categoria' => array(
                    'className' => 'Categoria',
                    'foreignKey' => 'id_categoria',
                    'conditions' => '',
                    'fields' => '',
                    'order' => ''
            )
    );

    function beforeValidate() {
        $this->data['Software']['url'] = Inflector::slug(strtolower($this->data['Software']['url']), '-');

        if(empty($this->data['Software']['url'])) {
            $this->data['Software']['url'] = Inflector::slug(strtolower($this->data['Software']['nombre']), '-');
        }

        if(empty($this->data['Software']['url'])) {
            $this->data['Software']['url'] = $this->data['Software']['id'];
        }
    }
    
    function getBreadcrumb($id) {
    	$breadcrumb = array();
    	$software = $this->findById($id);
    	$breadcrumb[$software['Software']['nombre']] = '/' . $software['Software']['url'];
    	
    	App::import('Model', 'Categoria');
    	$categoria = new Categoria();
    	
    	$padre = $categoria->findById($software['Software']['id_categoria']);
    	
    	$breadcrumb[$padre['Categoria']['nombre'] . '<span id="Cat' . $padre['Categoria']['id'] . '"></span>'] = '/categoria/' . $padre['Categoria']['url'];
    	 
    	while(!empty($padre['Categoria']['id_padre'])) {
	    	$padre = $categoria->findById($padre['Categoria']['id_padre']);
	    	$breadcrumb[$padre['Categoria']['nombre'] . '<span id="Cat' . $padre['Categoria']['id'] . '"></span>'] = '/categoria/' . $padre['Categoria']['url'];
    	}
    	
    	$breadcrumb['Inicio'] = '/';
    	
    	return array_reverse($breadcrumb);
    }
}
