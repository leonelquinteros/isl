<?php
$paginator->options(array('url' => array('admin' => true)));
?>

<h1>Categor&iacute;as</h1>

<div id="menu">
    <h3>Acciones</h3>
    <ul>
        <li><?php echo $html->link(':: Nueva Categoria', array('action' => 'add')); ?></li>
    </ul>

    <?php echo $this->element('admin_menu'); ?>
</div>

<div id="content" class="categorias index">

    <table cellpadding="0" cellspacing="0">
    <tr>
            <th><?php echo $paginator->sort('id');?></th>
            <th><?php echo $paginator->sort('nombre');?></th>
            <th class="actions"><?php __('Ruta');?></th>
            <th class="actions"><?php __('Acciones');?></th>
    </tr>
    <?php
    $i = 0;
    foreach ($categorias as $categoria):
            $class = null;
            if ($i++ % 2 == 0) {
                    $class = ' class="altrow"';
            }
    ?>
            <tr<?php echo $class;?>>
                    <td>
                            <?php echo $categoria['Categoria']['id']; ?>
                    </td>
                    <td>
                            <?php echo $categoria['Categoria']['nombre']; ?>
                    </td>
                    <td>
                            <?php echo $cat->getFullName($categoria['Categoria']['id']); ?>
                    </td>
                    <td class="actions">
                            <?php echo $html->link(__('Ver', true), array('action' => 'view', 'admin' => true, $categoria['Categoria']['id'])); ?>
                            <?php echo $html->link(__('Editar', true), array('action' => 'edit', 'admin' => true, $categoria['Categoria']['id'])); ?>
                            <?php echo $html->link(__('Eliminar', true), array('action' => 'delete', 'admin' => true, $categoria['Categoria']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $categoria['Categoria']['id'])); ?>
                    </td>
            </tr>
    <?php endforeach; ?>
    </table>

    <div class="paging">
        <?php echo $paginator->prev('<< Anterior', array(), null, array('class'=>'disabled'));?>
        <?php echo $paginator->numbers(array('separator' => ''));?>
        <?php echo $paginator->next('Siguiente >>', array(), null, array('class' => 'disabled'));?>
    </div>
</div>

