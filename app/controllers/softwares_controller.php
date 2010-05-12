<?php
class SoftwaresController extends AppController {

    var $name = 'Softwares';
    var $helpers = array('Html', 'Form', 'Cat');
    var $uses = array('Software', 'Categoria');
    var $components = array('Auth');
    
    var $paginate = array(  'limit' => 20,
                            'url' => array('admin' => true)
    );

    function beforeFilter() {
        $this->layout = 'admin';
    }

    function admin_index() {
        $this->set('softwares', $this->paginate());
        $this->set('breadcrumb', array('Admin' => '/admin', 'Softwares' => '/admin/softwares'));
    }

    function admin_view($id = null) {
            if (!$id) {
                    $this->Session->setFlash(__('Invalid Software', true));
                    $this->redirect(array('action' => 'index'));
            }
            $this->set('software', $this->Software->read(null, $id));
            $this->set('breadcrumb', array( 'Admin' => '/admin/',
                                            'Softwares' => '/admin/softwares',
                                            'Ver' => '/admin/softwares/view/' . $id
                                        )
                       );
    }

    function admin_add() {
        if (!empty($this->data)) {
                $this->Software->create();
                if ($this->Software->save($this->data)) {
                        $this->Session->setFlash(__('The Software has been saved', true));
                        $this->redirect(array('action' => 'index'));
                } else {
                        $this->Session->setFlash(__('The Software could not be saved. Please, try again.', true));
                }
        }

        $this->set('breadcrumb', array( 'Admin' => '/admin/',
                                        'Softwares' => '/admin/softwares',
                                        'Agregar' => '/admin/softwares/add/'
                                    )
                   );

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

        $this->set('headerElements', array('admin_softwares_tinymce_header'));
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid Software', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Software->save($this->data)) {
                    $this->Session->setFlash(__('The Software has been saved', true));
                    $this->redirect(array('action' => 'index'));
            } else {
                    $this->Session->setFlash(__('The Software could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Software->read(null, $id);
        }

        $this->set('breadcrumb', array( 'Admin' => '/admin/',
                                        'Softwares' => '/admin/softwares',
                                        'Editar' => '/admin/softwares/edit/' . $id
                                    )
                   );

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

        $this->set('headerElements', array('admin_softwares_tinymce_header'));
    }

    function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for Software', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Software->del($id)) {
            $this->Session->setFlash(__('Software deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('The Software could not be deleted. Please, try again.', true));
        $this->redirect(array('action' => 'index'));
    }

}
?>