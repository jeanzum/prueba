<?php 
/*
Theme Name: test
Author: Alejandro Restrepo
Description: Plantilla diseñada para prueba
Version: 1.0
*/

// Quito barra superior 
add_filter( 'show_admin_bar', '__return_false' );

// Agrego el menu de wordpress. 
add_theme_support( 'menus' );

function add_scripts(){
    
    // Registro nuevas hojas de estilos para la plantilla

    // wp_register_style( 'menu', get_template_directory_uri() . '/css/menu.css');

    // Registro nuevos script complementarios.
    
    wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
    wp_register_script( 'iconos', get_stylesheet_directory_uri() . '/js/icons.js', array('jquery'), true);
    wp_enqueue_script( 'custom-script' );
    wp_enqueue_script( 'iconos' );

}

add_action('wp_enqueue_scripts', 'add_scripts');

// Agrego función de menú

class description_walker extends Walker_Nav_Menu
{
      function start_el(&$output, $item, $depth, $args)
      {
           global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';

           $classes = empty( $item->classes ) ? array() : (array) $item->classes;

           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
           $class_names = ' class="'. esc_attr( $class_names ) . '"';

           $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

           $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
           $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
           $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
           $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

           $prepend = '<strong>';
           $append = '</strong>';
           $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

           if($depth != 0)
           {
                     $description = $append = $prepend = "";
           }

            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
            $item_output .= $description.$args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            }
}
