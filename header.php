<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body <?php body_class();?>> 
   <header class="sticky-top">
        <?php wp_nav_menu(
            array(
                'theme_location' => 'top-menu'
            )
        );?>
   </header>
