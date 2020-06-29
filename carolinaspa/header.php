
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Carolina Spa</title>
    <?php wp_head(); ?>
  </head>
  <body>
    
    <header class="encabezado-sitio container">
      <div class="row justify-content-md-between align-items-center">
      <!--
     justify-content-md-center, md-around md-start, md-end
      opcional: align-items-center -start -end -center -baseline -stretch -->
            <div class="col-lg-4">
                <a href="<?php echo esc_url( home_url('/') ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="img-fluid mx-auto d-block pt-4 pb-4">
                </a>
            </div> <!--col-lg-4-->

            <div class="col-lg-4">
                <?php
                  $args = array(
                    'container' => 'nav',
                    'container_class' => 'sociales text-center text-md-right pt-3',
                    'link_before' => '<span class="sr-only">',
                    'link_after' => '</span>',
                    'theme_location' => 'social_menu' 
                  );
                  wp_nav_menu($args);
                ?>
            </div> <!--.col-lg-4-->
        </div> <!--.row-->
  </header>

  <div class="navegacion mt-3 py-1">
    <nav class="nav-principal navbar navbar-expand-md navbar-light bg-faded">
      <!-- menu responsive aqui -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_principal" aria-label="Mostrar Navegacion">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="#" class="navbar-brand d-lg-none">Carolina Spa</a>
        <div class="container">            
            <?php
              $args = array(   
                'menu_class' => 'nav nav-justified w-100 flex-column flex-sm-row',
                'container_class' => 'collapse navbar-collapse w-100',
                'container_id' => 'nav_principal',
                'theme_location' => 'menu_principal'                           
              );
              wp_nav_menu($args);
            ?>
        </div> <!--.container-->
    </nav>
  </div>
