<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php echo wp_title( '|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php echo body_class(); ?>>
    <div class="wrap">
    <header>
       <nav class="navbar navbar-expand-md navbar-light bg-faded tinyone-yellow">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">
            <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/logo.png'; ?>" alt="logo.png"></a> <b>tinyone</b>
          </a>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto mt-2 mt-md-0">
              <?php 
                wp_nav_menu(
                    array(
                         'theme_location' => 'primary',
                         'menu_class'     => 'primary-menu',
                         'container'      => true,
                         'items_wrap'     => '%3$s'
                    )
                );
              ?>
            </ul>
        
          </div>
        </div>
          
        </nav>
    </header>
    
      
    
