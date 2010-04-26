    <h3>Categor&iacute;as</h3>
    <ul>
        <?php
        foreach($categorias as $cat) {
            ?>
            <li>
                <a href="/categoria/<?php echo $cat['Categoria']['url']; ?>"><?php echo $cat['Categoria']['nombre']; ?></a>
            </li>
            <?php
        }
        ?>
    </ul>
    