<h1>Nuevo Software</h1>

<div id="menu">
    <?php echo $this->element('admin_menu'); ?>
</div>

<div id="content" class="softwares form">
<?php
    echo $form->create('Software');
    
    echo $form->input('nombre');
    echo $form->input('url');
    echo "<label>Categor&iacute;a</label>\n";
    echo $form->select('id_categoria', $categorias, null, array('escape' => false));
    echo $form->input('descripcion');
    echo "<br />"; // Espacio para el TinyMCE
    echo $form->input('website_url');
    echo $form->input('download_url');

    echo $form->end('Guardar');
?>
</div>
