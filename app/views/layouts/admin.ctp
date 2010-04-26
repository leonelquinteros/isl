<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
    <head>
        <title>ISL Admin</title>
        <link rel="stylesheet" type="text/css" href="/css/admin.css" />
        <script type="text/javascript" src="/js/jquery-1.4.2.min"></script>

        <?php
        if(!empty($headerElements) && is_array($headerElements)) {
            foreach($headerElements as $el) {
                echo $this->element($el);
            }
        }
        ?>
    </head>

    <body>
        <div id="wrapper">
            <div id="top">
                <strong>&Iacute;ndice Argentino de Software Libre</strong>
                <span>Administraci&oacute;n</span>

                <div id="welcome">
                    <?php
                    if(!empty($_SESSION['Auth']['User']['username'])) {
                        ?>
                        Bienvenido <?php echo $_SESSION['Auth']['User']['username'];?>
                        | <a href="/admin/users/logout">Cerrar sesi&oacute;n</a>
                        <?php
                    }
                    ?>

                </div>

                <div id="breadcrumb">
                    <?php
                    if(!empty($breadcrumb))
                    {
                        foreach($breadcrumb as $name => $link)
                        {
                            ?>
                            ::<a href="<?php echo $link;?>"><?php echo $name; ?></a>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <?php echo $content_for_layout; ?>

        </div>

        <div id="bottom">

        </div>
    </body>
</html>
