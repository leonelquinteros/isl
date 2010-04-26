<h1>Nueva Categoria</h1>

<div id="menu">
    <?php echo $this->element('admin_menu'); ?>
</div>

<div id="content" class="categorias form">
    <?php echo $form->create('Categoria');?>
        <?php
            echo $form->input('nombre');
            echo $form->input('url');
            echo "<label>Categor&iacute;a padre</label>\n";
            echo $form->select('id_padre', $categorias);
        ?>
    <?php echo $form->end('Guardar');?>
</div>
