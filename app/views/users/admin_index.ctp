<?php
$paginator->options(array('url' => array('admin' => true)));
?>

<h1>Administradores</h1>

<div id="menu">
    <?php echo $this->element('admin_menu'); ?>
</div>

<div id="content" class="users index">

    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $paginator->sort('id');?></th>
            <th><?php echo $paginator->sort('username');?></th>
            <th class="actions"><?php __('Actions');?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($users as $user):
            $class = null;
            if ($i++ % 2 == 0) {
                    $class = ' class="altrow"';
            }
        ?>
        <tr<?php echo $class;?>>
            <td>
                <?php echo $user['User']['id']; ?>
            </td>
            <td>
                <?php echo $user['User']['username']; ?>
            </td>
            <td class="actions">
                <?php echo $html->link(__('Ver', true), array('action' => 'view', $user['User']['id'], 'admin' => true)); ?>
                <?php echo $html->link(__('Eliminar', true), array('action' => 'delete', $user['User']['id'], 'admin' => true), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?>
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
