<div id="menu">
    <h3>Acciones</h3>
    <ul>
        <li><?php echo $html->link(':: Eliminar Administrador', array('action' => 'delete', $user['User']['id'], 'admin' => true), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
    </ul>

    <?php echo $this->element('admin_menu'); ?>
</div>

<div id="content" class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
