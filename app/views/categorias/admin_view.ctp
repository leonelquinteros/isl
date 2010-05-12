<h1>Categor&iacute;a</h1>

<div id="menu">
    <h3>Acciones</h3>
    <ul>
        <li><?php echo $html->link(':: Editar Categoria', array('action' => 'edit', $categoria['Categoria']['id'])); ?> </li>
        <li><?php echo $html->link(':: Eliminar Categoria', array('action' => 'delete', $categoria['Categoria']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $categoria['Categoria']['id'])); ?> </li>
    </ul>

    <?php echo $this->element('admin_menu'); ?>
</div>

<div id="content" class="categorias view">
    <dl>
        <dt>Id</dt>
        <dd>
            <?php echo $categoria['Categoria']['id']; ?>
            &nbsp;
        </dd>
        <dt>Nombre</dt>
        <dd>
            <?php echo $categoria['Categoria']['nombre']; ?>
            &nbsp;
        </dd>
        <dt>Url</dt>
        <dd>
            <?php echo $categoria['Categoria']['url']; ?>
            &nbsp;
        </dd>
        <dt>Ruta</dt>
        <dd>
            <?php echo $cat->getFullName($categoria['Categoria']['id']); ?>
            &nbsp;
        </dd>
    </dl>


    <div class="related">
	<h2>Sub Categorias</h2>
	<?php if (!empty($categoria['SubCategorias'])):?>
            <table cellpadding = "0" cellspacing = "0">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th class="actions">Acciones</th>
                </tr>
                <?php
                $i = 0;
                foreach ($categoria['SubCategorias'] as $subCategorias):
                    $class = null;
                    if ($i++ % 2 == 0) {
                            $class = ' class="altrow"';
                    }
                    ?>
                    <tr<?php echo $class;?>>
                        <td><?php echo $subCategorias['id'];?></td>
                        <td><?php echo $subCategorias['nombre'];?></td>
                        <td class="actions">
                                <?php echo $html->link(__('Ver', true), array('controller' => 'categorias', 'action' => 'view', $subCategorias['id'])); ?>
                                <?php echo $html->link(__('Editar', true), array('controller' => 'categorias', 'action' => 'edit', $subCategorias['id'])); ?>
                                <?php echo $html->link(__('Eliminar', true), array('controller' => 'categorias', 'action' => 'delete', $subCategorias['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subCategorias['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

    </div>

    <div class="related">
	<h2>Software en esta Categoria</h2>
	<?php if (!empty($categoria['Software'])):?>
            <table cellpadding = "0" cellspacing = "0">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th class="actions">Acciones</th>
                </tr>
                <?php
                foreach ($categoria['Software'] as $software):
                    ?>
                    <tr>
                        <td><?php echo $software['id'];?></td>
                        <td><?php echo $software['nombre'];?></td>
                        <td class="actions">
                                <?php echo $html->link(__('Ver', true), array('controller' => 'softwares', 'action' => 'view', $software['id'])); ?>
                                <?php echo $html->link(__('Editar', true), array('controller' => 'softwares', 'action' => 'edit', $software['id'])); ?>
                                <?php echo $html->link(__('Eliminar', true), array('controller' => 'softwares', 'action' => 'delete', $software['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $software['nombre'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

    </div>

</div>


