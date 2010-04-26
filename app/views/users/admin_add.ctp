<h1>Nuevo Administrador</h1>

<div id="menu">
    <?php echo $this->element('admin_menu'); ?>
</div>

<div id="content" class="users form">
<?php echo $form->create('User');?>
	<?php
		echo $form->input('username');
		echo $form->input('password');
	?>
<?php echo $form->end('Guardar');?>
</div>

