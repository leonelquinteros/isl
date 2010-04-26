<h1>Software</h1>

<div id="menu">
    <h3>Acciones</h3>
    <ul>
        <li><?php echo $html->link(':: Editar Software', array('action' => 'edit', $software['Software']['id'])); ?> </li>
        <li><?php echo $html->link(':: Eliminar Software', array('action' => 'delete', $software['Software']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $software['Software']['id'])); ?> </li>
    </ul>

    <?php echo $this->element('admin_menu'); ?>
</div>

<div id="content" class="softwares view">
    <dl><?php $i = 0; $class = ' class="altrow"';?>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $software['Software']['id']; ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $software['Software']['nombre']; ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Url'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $software['Software']['url']; ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descripcion'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $software['Software']['descripcion']; ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Website Url'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $software['Software']['website_url']; ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Download Url'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $software['Software']['download_url']; ?>
                &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Categoria'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                <?php echo $html->link($software['Categoria']['nombre'], array('controller' => 'categorias', 'action' => 'view', $software['Categoria']['id'])); ?>
                &nbsp;
        </dd>
    </dl>
</div>
