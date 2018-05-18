<?php
function wpdemo_save_options()
{
    if(!current_user_can('edit_theme_options')){
        wp_die(__('You are not allowed to be on this page'));
    }
    check_admin_referer('wpdemo_options_verify');
    $opts=get_option('wpdemo_opts');
    $opts['twitter']=sanitize_text_field($_POST['wpdemo_inputTwitter']);
    $opts['facebook']=sanitize_text_field($_POST['wpdemo_inputFacebook']);
    $opts['youtube']=sanitize_text_field($_POST['wpdemo_inputYoutube']);
    $opts['google_plus']=sanitize_text_field($_POST['wpdemo_inputGoogle']);
    $opts['instagram']=sanitize_text_field($_POST['wpdemo_inputInstagram']);
    $opts['logo_type']=absint($_POST['wpdemo_inputLogoType']);
    $opts['footer']=$_POST['wpdemo_inputFooter'];
    $opts['logo_img']=esc_url_raw($_POST['wpdemo_inputLogoImg']);
    update_option('wpdemo_opts',$opts);
    wp_redirect(admin_url('admin.php?page=wpdemo_theme_opts&status=1'));
}