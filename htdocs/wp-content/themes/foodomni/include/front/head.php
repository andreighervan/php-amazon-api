<?php

function wpdemo_head(){
    ?>
<style type="text/css">
    .card h3 a{
        color: <?php echo get_theme_mod('header_bg_color','#c205f4');?> !important;
    }
</style>
<?php
}