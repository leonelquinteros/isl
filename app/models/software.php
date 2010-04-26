<?php
class Software extends AppModel {
    var $name = 'Software';
    var $validate = array(
            'nombre' => array('notempty'),
            'url' => array('isUnique'),
            'website_url' => array('url'),
            'download_url' => array('url'),
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
}
?>