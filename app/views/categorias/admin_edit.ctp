<h1>Editar Categoria <?php echo $this->data['Categoria']['nombre']; ?></h1>

<div id="menu">
    <h3>Acciones</h3>
    <ul>
        <li><?php echo $html->link(':: Eliminar', array('action' => 'delete', $form->value('Categoria.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Categoria.nombre'))); ?></li>
    </ul>

    <?php echo $this->element('admin_menu'); ?>
</div>

<div id="content" class="categorias form">
<?php echo $form->create('Categoria');?>
    <?php
        echo $form->input('id');
        echo $form->input('nombre');
        echo $form->input('url');
        echo "<label>Categor&iacute;a padre</label>\n";
        echo $form->select('id_padre', $categorias, null, array('escape' => false));
    ?>
<?php echo $form->end('Guardar');?>
</div>
