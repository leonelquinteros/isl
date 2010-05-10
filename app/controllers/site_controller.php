<?php
class SiteController extends AppController {
    var $name = 'Site';
    var $uses = array('Software', 'Categoria');
    var $helpers = array('Html');

    function beforeFilter()
    {
        $this->layout = 'default';

        $this->set('categorias', $this->Categoria->find('all', array('conditions' => array('Categoria.id_padre' => '0'), 'order' => 'Categoria.nombre')));
    }

    function index() {
        $novedades = $this->Software->find('all', array('order' => 'Software.id DESC', 'limit' => 20));
        $this->set('novedades', $novedades);

        $this->set('breadcrumb', array( 'Inicio' => '/' ) );
    }

    function categoria($url = '') {
        $categoria = $this->Categoria->findByUrl($url);
        $this->set('categoria', $categoria);

        $categorias = $this->Categoria->find('all',
                        array('conditions' => array(
                                'Categoria.id_padre' => $categoria['Categoria']['id'])
                        )
                    );
        $this->set('subCategorias', $categorias);
        
        $software = $this->Software->find('all',
                        array('conditions' => array(
                                'Software.id_categoria' => $categoria['Categoria']['id'])
                        )
                    );
        $this->set('software', $software);
        
        $this->set('breadcrumb', $this->Categoria->getBreadcrumb($categoria['Categoria']['id']));
    }

    function ver($url = '') {
        if(!empty($url))
        {
            $software = $this->Software->findByUrl($url);
            
            if(!empty($software)) {
                $this->set('software', $software);
            }
            else
            {
                return $this->redirect('/notfound');
            }
            
            $this->set('breadcrumb', $this->Software->getBreadcrumb($software['Software']['id']));
        }
        else
        {
            $this->index();
            return $this->render('index');
        }
    }

    function notfound() {
        
    }
}
