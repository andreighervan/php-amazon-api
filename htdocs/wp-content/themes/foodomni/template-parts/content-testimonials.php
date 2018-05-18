<section class="section-testimonials" id="testimonials">
    <div class="row">
        <h2>Our customers can't live without us</h2>
    </div>
    <div class="row">
        <?php $loop=new WP_Query(array('post_type'=>'testimonials','orderby'=>'post_id','order'=>'ASC'));?>
        <?php while($loop->have_posts()):$loop->the_post();?>
        <div class="col-md-4">
            <blockquote><?php the_content();?>
                <cite><?php the_title();?> <?php if(has_post_thumbnail()) echo the_post_thumbnail();?></cite>
            </blockquote>
        </div>
        <?php endwhile;wp_reset_query();?>
    </div>
</section>
<div class="clearboth"></div>