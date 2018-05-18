<?php

function wpdemo_activate(){
    if(version_compare(get_bloginfo('version'),'4.2','<')){
        wp_die(__('You must have a minimum of 4.2 to use this theme'));
    }
    $theme_opts=get_option('wpdemo_opts');
    if($theme_opts){
        $opts=array(
            'facebook'=>'',
            'twitter'=>'',
            'youtube'=>'',
            'google_plus'=>'',
            'instagram'=>'',
            'logo_type'=>'',
            'logo_img'=>'',
            'footer'=>''
        );
        add_option('wpdemo_opts',$opts);
    }
}