<?php
class User extends AppModel {
    var $name = 'User';
    var $validate = array(
            'username' => array('isUnique'),
            'password' => array('notempty'),
    );

    function hashPasswords($data) {
        if(!empty($data['User']['password']))
        {
            $data['User']['password'] = sha1($data['User']['password']);
        }

        return $data;
    }

}
?>