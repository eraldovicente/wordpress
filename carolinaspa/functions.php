<?php

// Cargar hojas de estilos y Scripts
function carolinaspa_styles() {

     // Hojas de Estilos
     wp_enqueue_style('all', get_template_directory_uri() . '/css/all.min.css', array(), '5.13.0');
     wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0');
     wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Italianno&family=Lato:wght@400;700;900&family=Raleway:wght@400;700;900&display=swap', array(), '1.0');
     wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap'), '1.0' );

     // Scripts
     wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.slim.js', array(), '3.1.1', true);
     wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.js', array('jquery'), '1.0', true);
     wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.0', true);
     wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'carolinaspa_styles');

// Setup Theme
function carolinaspa_setup() {
     // Imagenes Destacadas
     add_theme_support('post-thumbnails');

     // Menus o navegaciones
     register_nav_menus( array(
          'menu_principal' => esc_html__('Menu Principal', 'carolinaspa'),
          'social_menu' => esc_html__('Menu Social', 'carolinaspa')
     ));
}
add_action('after_setup_theme', 'carolinaspa_setup');

// Agrega la clase nav-item de bootstrap al <li> del menu_principal
function carolinaspa_li_class($classes, $item, $args) {
     if ($args->theme_location == 'menu_principal') {
          $classes[] = 'nav-item';
     }
     return $classes;
}
add_filter('nav_menu_css_class', 'carolinaspa_li_class', 1, 3);

// Agrega la clase nav-link de bootstrap al <a> del menu_princial
function carolinaspa_a_class($atts, $item, $args) {
     if ($args->theme_location == 'menu_principal') {
          $class = 'class';
          $atts['class'] = 'nav-link';
     }
     return $atts;
}
add_filter('nav_menu_link_attributes', 'carolinaspa_a_class', 10, 3);


// Zona de Widgets
function carolinaspa_widgets() {
     register_sidebar(array(
          'name' => 'Footer Widget 1',
          'id' => 'footer_widget_1',
          'before_widget' => '<div id="%1$s">',
          'after_widget' => '</div>',
          'before_title' => '<h3 class="text-uppercase text-center pb-4">',
          'after_title' => '</h3>'
     ));
     register_sidebar(array(
          'name' => 'Footer Widget 2',
          'id' => 'footer_widget_2',
          'before_widget' => '<div id="%1$s">',
          'after_widget' => '</div>',
          'before_title' => '<h3 class="text-uppercase text-center pb-4">',
          'after_title' => '</h3>'
     ));
     register_sidebar(array(
          'name' => 'Footer Widget 3',
          'id' => 'footer_widget_3',
          'before_widget' => '<div id="%1$s">',
          'after_widget' => '</div>',
          'before_title' => '<h3 class="text-uppercase text-center pb-4">',
          'after_title' => '</h3>'
     ));
}
add_action('widgets_init', 'carolinaspa_widgets');


