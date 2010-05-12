<?php
class CategoriasController extends AppController {

    var $name = 'Categorias';
    var $helpers = array('Html', 'Form', 'Cat');
    var $components = array('Auth');
    
    var $paginate = array(  'limit' => 20,
                            'url' => array('admin' => true)
    );

    function beforeFilter() {
        $this->layout = 'admin';
    }

    function admin_index() {
        $this->set('categorias', $this->paginate());

        $this->set('breadcrumb', array( 'Admin' => '/admin/', 'Categor&iacute;as' => '/admin/categorias') );
    }

    function admin_view($id = null) {
        if (!$id) {
                $this->Session->setFlash(__('Invalid Categoria', true));
                $this->redirect(array('action' => 'index'));
        }
        $this->set('categoria', $this->Categoria->read(null, $id));

        $this->set('breadcrumb', array( 'Admin' => '/admin/',
                                        'Categorias' => '/admin/categorias',
                                        'Ver' => '/admin/categorias/view/' . $id
                                        )
                                    );
    }

    function admin_add() {
        if (!empty($this->data)) {
            if(empty($this->data['Categoria']['id_padre'])) {
                $this->data['Categoria']['id_padre'] = 0;
            }
            $this->Categoria->create();
            if ($this->Categoria->save($this->data)) {
                    $this->Session->setFlash(__('The Categoria has been saved', true));
                    $this->redirect(array('action' => 'index'));
            } else {
                    $this->Session->setFlash(__('The Categoria could not be saved. Please, try again.', true));
            }
        }

        $this->Categoria->recursive = 0;
        $categorias = $this->Categoria->find(
                    'list',
                    array(
                        'fields' => array('Categoria.nombre'),
                        'order' => array('Categoria.nombre')
                    )
        );

        $catData = array();
        
        foreach($categorias as $key => $value) {
            $catData[$key] = $this->Categoria->getFullName($key);
        }

        asort($catData);

        $this->set('categorias', $catData);

        $this->set('breadcrumb', array( 'Admin' => '/admin/',
                                        'Categorias' => '/admin/categorias',
                                        'Nueva Categoria' => '/admin/categorias/add/'
                                        )
                                    );
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
                $this->Session->setFlash(__('Invalid Categoria', true));
                $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
                if ($this->Categoria->save($this->data)) {
                        $this->Session->setFlash(__('The Categoria has been saved', true));
                        $this->redirect(array('action' => 'index'));
                } else {
                        $this->Session->setFlash(__('The Categoria could not be saved. Please, try again.', true));
                }
        }
        if (empty($this->data)) {
                $this->data = $this->Categoria->read(null, $id);
        }

        $this->Categoria->recursive = 0;
        $this->Categoria->recursive = 0;
        $categorias = $this->Categoria->find(
                    'list',
                    array(
                        'fields' => array('Categoria.nombre'),
                        'order' => array('Categoria.nombre')
                    )
        );

        $catData = array();

        foreach($categorias as $key => $value) {
            $catData[$key] = $this->Categoria->getFullName($key);
        }

        asort($catData);

        $this->set('categorias', $catData);

        $this->set('breadcrumb', array( 'Admin' => '/admin/',
                                        'Categorias' => '/admin/categorias',
                                        'Editar' => '/admin/categorias/edit/' . $id
                                        )
                                    );
    }

    function admin_delete($id = null) {
        if (!$id) {
                $this->Session->setFlash(__('Invalid id for Categoria', true));
                $this->redirect(array('action' => 'index'));
        }
        if ($this->Categoria->del($id)) {
                $this->Session->setFlash(__('Categoria deleted', true));
                $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('The Categoria could not be deleted. Please, try again.', true));
        $this->redirect(array('action' => 'index'));
    }

}
