<h1><?php echo $software['Software']['nombre']; ?></h1>

<div id="menu">
    <?php echo $this->element('menu'); ?>
</div>

<div id="content">
    <a href="<?php echo $software['Software']['website_url']; ?>">Website</a>
    <br />
    <a href="<?php echo $software['Software']['download_url']; ?>">Download</a>
    <br />
    <br />
    <?php echo $software['Software']['descripcion']; ?>
</div>