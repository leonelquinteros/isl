<?php
class CatHelper extends AppHelper {

    public function getFullName($id, $separator = null) {
        App::import('Model', 'Categoria');
        $cat = new Categoria();

        return $cat->getFullName($id, $separator);
    }
}