<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
    <head>
        <title>Indice Argentino de Software Libre</title>
        <link rel="stylesheet" type="text/css" href="/css/default.css" />
    </head>

    <body>
        <div id="wrapper">
            <div id="top">
                <strong>&Iacute;ndice Argentino de Software Libre</strong>
                <span>Slogan here</span>

                <div id="welcome">
                    
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
