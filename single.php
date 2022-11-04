<?php get_header(); ?>

<!--BLOG-->
<div id="blog-wrap">
    <section id="blog">
        <a class="back" href="<?php echo wp_get_referer(); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/fauntastic-icon-arrow-down.svg" alt=""></a>
        <section id="posts">
            <!--POSTS-->
            <ul class="posts medium open">
                <!--POST-->
                <li>
                    <article>
                        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                        <h5><?php the_title(); ?></h5>
                        <h6>De <?php the_author(); ?> | <?php the_date(); ?> | <?php the_category($parents='single'); ?></h6>
                        <?php the_content();?>
                        <?php endwhile; endif; ?>
                    </article>
                </li>
                <!--/POST-->
            </ul>
            <div class="cleaner"></div>
        </section>
        <?php get_template_part('parts/blog/aside'); ?>
    </section>
</div>
<!--/BLOG-->

<?php get_footer(); ?>