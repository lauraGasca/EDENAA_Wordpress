<?php

//---------------------------------------------------------------------
// CARACTERÍSTICAS DEL TEMA
//---------------------------------------------------------------------

// Ajustar el máximo ancho de las imagenes de acuerdo al diseño de este modo cualquier imagen que insertemos en el contenido de un artículo va a tener como máximo este ancho
if ( ! isset( $content_width ) )
    $content_width = 750; //El ancho máximo será de 750 pixeles

// Creamos una función para registrar algunas características del tema
function amk_theme_features()  {

    // Permitimos que el sitio soporte RSS Automáticos
    add_theme_support( 'automatic-feed-links' );

    // Permitimos qe el tema soporte imagenes destacadas
    add_theme_support( 'post-thumbnails');
}

// Ejecutamos la función y registra las características
add_action( 'after_setup_theme', 'amk_theme_features' );


//---------------------------------------------------------------------
// REGISTRAMOS EL MENU
//---------------------------------------------------------------------

register_nav_menus( array(
    'menu-principal' => __('Area principal de navegación', 'amk'),
    'menu-superior' => __('Area superior de navegación', 'amk')
) );


//---------------------------------------------------------------------
// REGISTRAMOS EL SIDEBAR
//---------------------------------------------------------------------

//Con la función register_sidebar, registramos una zona dinámica para nuestro tema y le pasamos algunos parámetros
register_sidebar(array(
    'name' => __('Bara lateral', 'amk'), //El nombre del área dinámica
    'id' => 'barra-lateral', //Un identificador único para la zona
    'description' => __( 'Este es el área de widgets del sitio.', 'amk'), //Una breve descripción
    'before_widget' => '<div id="%1$s" class="widget %2$s">', //Algo de HTML que irá antes de cada widget
    'after_widget'  => '</div>', //Algo de HTML que irá después de cada widget
    'before_title' => '<h3>', //La etiqueta que irá antes del título de cada widget
    'after_title' => '</h3>' //La etiqueta que irá después del título de cada widget
));