<?php

function wpdemo_admin_menu(){
    add_menu_page(
        'Theme Options',
        'Theme Options',
        'edit_theme_options',
        'wpdemo_theme_opts',
        'wpdemo_theme_opts_page'
    );
}