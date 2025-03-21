<?php

    function sercotec_template_setup (){
        //Aca activo imagenes destacadas en el escritorio
        add_theme_support('post-thumbnails',);

    }

    add_action('after_setup_theme', 'sercotec_template_setup');

    function cdn_css_kit() {
        wp_enqueue_style('mi-cdn-css', 'https://cdn.jsdelivr.net/gh/cristinafrivera1984/kit-ui-serc@v2.4/dist/css/estilos.min.css', array(), null, 'all');
    }

    function sercotec_scripts_styles () {
        wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0');
    }

    function bootstrap_scripts_styles () {
        wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3');
    }

    function bootstrap_js() {
        wp_enqueue_script( 'popper_js', 
                          'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', 
                          array(), 
                          '2.11.8', 
                          true); 
        wp_enqueue_script( 'bootstrap_js', 
                          'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js', 
                          array('jquery','popper_js'), 
                          '5.3.3', 
                          true); 
    }

    function funciones_scripts_js () {
        wp_enqueue_script('funcionestemplates', 'javascript/funciones.js', array(''), '1.1' , true);
    }  
  
    function google_icons_scripts () {
        wp_enqueue_style('googleicon', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200', array(), null);
    }     

    function google_fonts_scripts () {
        wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', array(), null);
    }  

    add_action('wp_enqueue_scripts', 'sercotec_scripts_styles');
    add_action('wp_enqueue_scripts', 'cdn_css_kit');
    add_action('wp_enqueue_scripts', 'bootstrap_scripts_styles');
    add_action('wp_enqueue_scripts', 'bootstrap_js');
    add_action('wp_enqueue_scripts', 'funciones_scripts_js');
    add_action('wp_enqueue_scripts', 'google_icons_scripts');
    add_action('wp_enqueue_scripts', 'google_fonts_scripts');


?>