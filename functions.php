<?php

// Activar imágenes destacadas
function sercotec_template_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'sercotec_template_setup');

// Encolar estilos y scripts
function sercotec_enqueue_assets() {
    // Estilos
    wp_enqueue_style('sercotec-style', get_stylesheet_uri(), array(), '1.0');
    wp_enqueue_style('cdn-css-kit', 'https://cdn.jsdelivr.net/gh/cristinafrivera1984/kit-ui-serc@v2.7/dist/css/estilos.min.css', array(), null, 'all');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3');
    wp_enqueue_style('glide-css-core', 'https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css', array(), '5.3');
    wp_enqueue_style('google-icons', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200', array(), null);
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', array(), null);

    // Scripts
    wp_enqueue_script('popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array(), '2.11.8', true);
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js', array('jquery', 'popper-js'), '5.3.3', true);
    wp_enqueue_script('sercotec-funciones', get_template_directory_uri() . '/javascript/funciones.js', array(), '1.1', true);
    wp_enqueue_script('glide-js', 'https://cdn.jsdelivr.net/npm/@glidejs/glide', array(), '3.7.1', true);

}

add_action('wp_enqueue_scripts', 'sercotec_enqueue_assets');

?>
