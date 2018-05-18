<?php
$theme_opts=get_option('wpdemo_opts');
?>
<footer>
    <div class="row">
        <div class="col-md-6">

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer_menu',
                    'container' => false,
                    'menu_class' => ' footer-nav'
                )); ?>

        </div>
        <div class="col-md-6">
            <ul class="social-links">
                <li><a href="https://www.facebook.com/<?php echo $theme_opts['facebook'];?>" target="_blank"><i class="ion-social-facebook"></i> </a></li>
                <li><a href="https://www.twitter.com/<?php echo $theme_opts['twitter'];?>" target="_blank"><i class="ion-social-twitter"></i> </a></li>
                <li><a href="https://www.google.com/<?php echo $theme_opts['google_plus'];?>" target="_blank"><i class="ion-social-googleplus"></i> </a></li>
                <li><a href="https://www.instagram.com/<?php echo $theme_opts['instagram'];?>" target="_blank"><i class="ion-social-instagram"></i> </a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <p><?php echo $theme_opts['footer'];?></p>
    </div>
</footer>
<?php wp_footer();?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.onepage-scroll.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/respond.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/html5shiv.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/selectivizr.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/options.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/main.js"></script>
</body>
</html>