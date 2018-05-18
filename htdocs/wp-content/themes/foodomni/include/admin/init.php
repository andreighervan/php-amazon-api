<?php

function wpdemo_admin_init(){
    include ('enqueue.php');
    add_action('admin_enqueue_scripts','wpdemo_admin_enqueue');
    add_action('admin_post_wpdemo_save_options','wpdemo_save_options');
}
