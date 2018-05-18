<?php
function wpdemo_theme_opts_page(){
    $theme_opts=get_option('wpdemo_opts');
    ?>
<div class="wrap">
    <div class="panel">
        <div class="panel-loading">
            <h3 class="panel-title"><?php _e('Theme Settings','wpdemo');?></h3>
        </div>
        <div class="panel-body">
            <?php
            if(isset($_GET['status'])&&$_GET['status']==1){
                ?>
                <div class="alert alert-success">SUCCESS !</div>
                <?php
            }
            ?>
            <form method="post" action="admin-post.php">
                <input type="hidden" name="action" value="wpdemo_save_options">
                <?php wp_nonce_field('wpdemo_options_verify');?>
                <h4><?php _e('Social Icons','wpdemo');?></h4>
            <div class="form-group">
                <label><?php _e('Twitter','wpdemo');?></label>
                <input type="text" class="form-control" name="wpdemo_inputTwitter" value="<?php echo $theme_opts['twitter'];?>">
            </div>
                <div class="form-group">
                    <label><?php _e('Facebook','wpdemo');?></label>
                    <input type="text" class="form-control" name="wpdemo_inputFacebook" value="<?php echo $theme_opts['facebook'];?>">
                </div>
                <div class="form-group">
                    <label><?php _e('Google plus','wpdemo');?></label>
                    <input type="text" class="form-control" name="wpdemo_inputGoogle" value="<?php echo $theme_opts['google_plus'];?>">
                </div>
                <div class="form-group">
                    <label><?php _e('Instagram','wpdemo');?></label>
                    <input type="text" class="form-control" name="wpdemo_inputInstagram" value="<?php echo $theme_opts['instagram'];?>">
                </div>
                <h4><?php _e('Logo','wpdemo');?></h4>
                <div class="form-group">
                    <label><?php _e('Logo Type','wpdemo');?></label>
                    <select class="form-control" name="wpdemo_inputLogoType">
                        <option value="1"><?php _e('Site Name','wpdemo');?></option>
                        <option value="2" <?php echo $theme_opts['logo_type']==2?'SELECTED':'';?>><?php _e('Image','wpdemo');?></option>
                    </select>
                </div>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Logo Image" name="wpdemo_inputLogoImg" value="<?php echo $theme_opts['logo_img'];?>">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button" id="wpdemo_uploadLogoImgBtn">
                            <?php _e('Upload','wpdemo');?>
                        </button>
                    </span>
                </div>
                <h4><?php _e('Footer','wpdemo');?></h4>
                <div class="form-group">
                    <textarea cols="62"  name="wpdemo_inputFooter"><?php echo stripslashes($theme_opts['footer']);?></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
}