<?php
class UsersController extends AppController {

    var $name = 'Users';
    var $helpers = array('Html', 'Form');
    var $components = array('Auth');

    var $paginate = array(  'limit' => 20,
                            'url' => array('admin' => true)
    );

    function beforeFilter() {
        $this->layout = 'admin';

        $this->Auth->authenticate = ClassRegistry::init('User');
    }

    /**
    * The AuthComponent provides the needed functionality
    * for login, so you can leave this function blank.
    */
    function admin_login() {
    }

    function admin_logout() {
        $this->redirect($this->Auth->logout());
    }

    function admin_index() {
            $this->User->recursive = 0;
            $this->set('users', $this->paginate());
    }

    function admin_view($id = null) {
            if (!$id) {
                    $this->Session->setFlash(__('Invalid User', true));
                    $this->redirect(array('action' => 'index'));
            }
            $this->set('user', $this->User->read(null, $id));
    }

    function admin_add() {
            if (!empty($this->data)) {
                    $this->User->create();
                    if ($this->User->save($this->data)) {
                            $this->Session->setFlash(__('The User has been saved', true));
                            $this->redirect(array('action' => 'index'));
                    } else {
                            $this->Session->setFlash(__('The User could not be saved. Please, try again.', true));
                    }
            }
    }

    function admin_delete($id = null) {
            if (!$id) {
                    $this->Session->setFlash(__('Invalid id for User', true));
                    $this->redirect(array('action' => 'index'));
            }
            if ($this->User->del($id)) {
                    $this->Session->setFlash(__('User deleted', true));
                    $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('The User could not be deleted. Please, try again.', true));
            $this->redirect(array('action' => 'index'));
    }

}
