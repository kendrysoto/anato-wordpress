<?php
/*
Plugin Name: Saludo ANATO
Description: Plugin para mostrar un saludo personalizado en ANATO.
Version: 1.0
Author: Tu Nombre
*/

function saludo_anato_shortcode() {
    return '<h2>Hola ANATO</h2>';
}
add_shortcode('saludo_anato', 'saludo_anato_shortcode');
