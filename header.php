<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr" <?php blankslate_schema_type(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <?php wp_head(); ?>
</head>
<div class="">
    <nav id="MainNav" class="navbar navbar-expand-lg navbar-light" role="navigation" >
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WebProz</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div style="color:white;" class="collapse navbar-collapse top-right-links" id="navbarSupportedContent">
                <?php add_filter( 'nav_menu_link_attributes', 'add_class_to_all_menu_anchors', 10 );
                    wp_nav_menu( array('theme_location' => 'main-menu',    'menu_class'  => 'navbar-nav me-auto mb-2 mb-lg-0', 'add_li_class' => 'nav-item',  'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
            </div>
        </div>    
    </nav>
</div>



