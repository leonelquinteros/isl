<h1>Editar Software <?php echo $this->data['Software']['nombre']; ?></h1>

<div id="menu">
    <h3>Acciones</h3>
    <ul>
        <li><?php echo $html->link(':: Eliminar', array('action' => 'delete', $form->value('Software.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Software.nombre'))); ?></li>
    </ul>

    <?php echo $this->element('admin_menu'); ?>
</div>

<div id="content" class="softwares form">
<?php
    echo $form->create('Software');

    echo $form->input('id');
    echo $form->input('nombre');
    echo $form->input('url');
    echo "<label>Categor&iacute;a</label>\n";
    echo $form->select('id_categoria', $categorias, null, array('escape' => false));
    echo $form->input('descripcion');
    echo "<br />";
    echo $form->input('website_url');
    echo $form->input('download_url');

    echo $form->end('Guardar');
?>
</div>
