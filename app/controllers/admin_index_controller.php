<?php
class AdminIndexController extends AppController {
    var $name = 'AdminIndex';
    var $helpers = array('Html', 'Form');
    var $uses = array();
    var $components = array('Auth');

    function beforeFilter() {
        $this->layout = 'admin';
    }

    function admin_index() {
        
    }

}
