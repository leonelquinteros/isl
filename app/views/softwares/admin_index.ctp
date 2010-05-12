<?php
$paginator->options(array('url' => array('admin' => true)));
?>

<h1>Software</h1>

<div id="menu">
    <?php echo $this->element('admin_menu'); ?>
</div>

<div id="content" class="softwares index">
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $paginator->sort('Id', 'id');?></th>
            <th><?php echo $paginator->sort('Nombre', 'nombre');?></th>
            <th><?php echo $paginator->sort('Website URL','website_url');?></th>
            <th><?php echo $paginator->sort('Download URL','download_url');?></th>
            <th><?php echo $paginator->sort('Categoria', 'Categoria.nombre');?></th>
            <th class="actions">Acciones</th>
        </tr>
        <?php
        $i = 0;
        foreach ($softwares as $software):
            $class = null;
            if ($i++ % 2 == 0) {
                    $class = ' class="altrow"';
            }
            ?>
            <tr<?php echo $class;?>>
                <td>
                        <?php echo $software['Software']['id']; ?>
                </td>
                <td>
                        <?php echo $software['Software']['nombre']; ?>
                </td>
                <td>
                        <?php echo $software['Software']['website_url']; ?>
                </td>
                <td>
                        <?php echo $software['Software']['download_url']; ?>
                </td>
                <td>
                        <a href="/admin/categorias/view/<?php echo $software['Categoria']['id']; ?>"><?php echo $software['Categoria']['nombre']; ?></a>
                </td>
                <td class="actions">
                        <?php echo $html->link('Ver', array('controller' => 'softwares', 'action' => 'view', 'admin' => true, $software['Software']['id'])); ?>
                        <?php echo $html->link('Editar', array('controller' => 'softwares', 'action' => 'edit', 'admin' => true, $software['Software']['id'])); ?>
                        <?php echo $html->link('Eliminar', array('controller' => 'softwares', 'action' => 'admin_delete', 'admin' => true, $software['Software']['id']), null, sprintf('Are you sure you want to delete # %s?', $software['Software']['nombre'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div class="paging">
        <?php echo $paginator->prev('<< ' . 'Anterior', array(), null, array('class'=>'disabled'));?>
        <?php echo $paginator->numbers(array('separator' => ''));?>
        <?php echo $paginator->next('Siguiente' . ' >>', array(), null, array('class' => 'disabled'));?>
    </div>
</div>

