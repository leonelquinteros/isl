    <h3>Software</h3>
    <ul>
        <li><?php echo $html->link(':: Lista de Software', array('controller' => 'softwares', 'action' => 'admin_index', 'admin' => true)); ?></li>
        <li><?php echo $html->link(':: Nuevo Software', array('controller' => 'softwares', 'action' => 'admin_add', 'admin' => true)); ?></li>
    </ul>

    <h3>Categorias</h3>
    <ul>
        <li><?php echo $html->link(':: Categorias', array('controller' => 'categorias', 'action' => 'admin_index', 'admin' => true)); ?> </li>
        <li><?php echo $html->link(':: Nueva Categoria', array('controller' => 'categorias', 'action' => 'admin_add', 'admin' => true)); ?> </li>
    </ul>

    <h3>Administradores</h3>
    <ul>
        <li><?php echo $html->link(':: Administradores', array('controller' => 'users', 'action' => 'admin_index', 'admin' => true)); ?> </li>
        <li><?php echo $html->link(':: Nuevo Administrador', array('controller' => 'users', 'action' => 'admin_add', 'admin' => true)); ?> </li>
    </ul>