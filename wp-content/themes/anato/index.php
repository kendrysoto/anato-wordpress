<?php

get_header();
?>
<div id="content" style="width: 100%; min-height: 500px; display: flex; justify-content: center; align-items: center; text-align: center;">
    <h1>Bienvenido a ANATO</h1>
    <?php
  
    echo do_shortcode('[saludo_anato]');
    ?>
</div>
<?php get_footer(); ?>
