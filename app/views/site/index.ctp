<h1>T&iacute;tulo</h1>

<div id="menu">
    <?php echo $this->element('menu'); ?>
</div>

<div id="content">
    <h2>Novedades</h2>

    <?php
    foreach($novedades as $novedad) {
        ?>
        <a style="font-size:1.2em;margin-bottom:10px;display:block;" href="/ver/<?php echo $novedad['Software']['url'] ?>"><?php echo $novedad['Software']['nombre']; ?></a>
        <?php
    }
    ?>
</div>