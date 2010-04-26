<h1>Categoria</h1>

<div id="menu">
    <?php echo $this->element('menu'); ?>
</div>

<div id="content">
    <h2>Sub-Categorias</h2>

    <?php
    foreach($subCategorias as $cat) {
        ?>
        <a style="font-size:1.2em;margin-bottom:10px;display:block;" href="/categoria/<?php echo $cat['Categoria']['url'] ?>"><?php echo $cat['Categoria']['nombre']; ?></a>
        <?php
    }
    ?>

    <br /><br />

    <h2>Software en esta categoria</h2>

    <?php
    foreach($software as $soft) {
        ?>
        <a style="font-size:1.2em;margin-bottom:10px;display:block;" href="/ver/<?php echo $soft['Software']['url'] ?>"><?php echo $soft['Software']['nombre']; ?></a>
        <?php
    }
    ?>
</div>

