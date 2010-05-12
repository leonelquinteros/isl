<h1><?php echo $categoria['Categoria']['nombre']; ?></h1>

<div id="menu">
    <?php echo $this->element('menu'); ?>
</div>

<div id="content">
    <h2>Sub-Categorias</h2>

    <?php
    foreach($subCategorias as $categ) {
        ?>
        <a style="font-size:1.1em;margin-bottom:10px;display:block;" href="/categoria/<?php echo $categ['Categoria']['url'] ?>">
            <?php echo $cat->getFullName($categ['Categoria']['id']); ?>
        </a>
        <?php
    }
    ?>

    <br /><br />

    <h2>Software en esta categoria</h2>

    <?php
    foreach($software as $soft) {
        ?>
        <a style="font-size:1.1em;margin-bottom:10px;display:block;" href="/ver/<?php echo $soft['Software']['url'] ?>"><?php echo $soft['Software']['nombre']; ?></a>
        <?php
    }
    ?>
</div>

