<?php

function wpdemo_setup_theme(){
    register_nav_menu('primary',__('Primary Menu','wpdemo'));
    register_nav_menu('footer_menu',__('Footer Menu','wpdemo'));
}