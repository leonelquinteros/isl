<?php
class Categoria extends AppModel {

    var $name = 'Categoria';
    var $validate = array(
            'nombre' => array('notempty'),
            'url' => array('isUnique')
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed
    var $hasMany = array(
            'SubCategorias' => array(
                    'className' => 'Categoria',
                    'foreignKey' => 'id_padre',
                    'dependent' => false,
                    'conditions' => '',
                    'fields' => '',
                    'order' => 'nombre',
                    'limit' => '',
                    'offset' => '',
                    'exclusive' => '',
                    'finderQuery' => '',
                    'counterQuery' => ''
            ),
            'Software' => array(
                    'className' => 'Software',
                    'foreignKey' => 'id_categoria',
                    'dependent' => false,
                    'conditions' => '',
                    'fields' => '',
                    'order' => 'nombre',
                    'limit' => '',
                    'offset' => '',
                    'exclusive' => '',
                    'finderQuery' => '',
                    'counterQuery' => ''
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

}
?>