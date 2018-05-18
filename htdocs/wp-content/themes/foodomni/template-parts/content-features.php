<section class="section-features js-section-features" id="features">
    <div class="row">
        <h2>Get food fast &mdash; not fast food</h2>
        <p class="long-copy"><?php echo get_field('subtitle_features');?></p>
    </div>

    <div class="row js-wp-1">
        <?php $loop=new WP_Query(array('post_type'=>'features','orderby'=>'post_id','order'=>'ASC'));?>
        <?php while($loop->have_posts()):$loop->the_post();?>
        <div class="col-md-3 box">
            <i class="<?php echo the_field('ionicon_class');?>"></i>
            <h3><?php the_title();?></h3>
            <p><?php the_content();?></p>
        </div>
        <?php endwhile;wp_reset_query();?>
    </div>

</section>