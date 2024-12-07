<?php
// Soporte para menús
function anato_setup() {
    add_theme_support('menus');
    register_nav_menu('header-menu', __('Menú Principal'));
}
add_action('after_setup_theme', 'anato_setup');

function anato_register_agencias() {
    $labels = array(
        'name' => 'Agencias',
        'singular_name' => 'Agencia',
        'add_new' => 'Añadir Nueva',
        'add_new_item' => 'Añadir Nueva Agencia',
        'edit_item' => 'Editar Agencia',
        'new_item' => 'Nueva Agencia',
        'view_item' => 'Ver Agencia',
        'all_items' => 'Todas las Agencias',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-building',
        'supports' => array('title'),
    );

    register_post_type('agencias', $args);
}
add_action('init', 'anato_register_agencias');
