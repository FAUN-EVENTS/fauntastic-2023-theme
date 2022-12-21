<?php get_header(); ?>

    <!--BLOG-->
    <section id="blog">

        <h6 class="top-title m-top-xl">Stay informed !</h6>
        <h2>News & Communications</h2>
        <hr>
        <section id="posts">
            <!--POSTS-->
            <ul class="posts medium">
                <?php if (have_posts()) : while (have_posts()):the_post(); ?>
                    <!--POST-->
                    <li>
                        <article>
                            <h5><?php the_title(); ?></h5>
                            <h6>De <?php the_author(); ?> | <?php the_date(); ?>
                                | <?php the_category($parents = 'single'); ?></h6>
                            <p><?php the_excerpt(); ?></p>
                            <a href=<?php the_permalink(); ?> class="button ruby">SEE MORE</a>
                        </article>
                    </li>
                <?php endwhile;endif; ?>
                <!--/POST-->

                <!--PAGER-->
                <?php the_posts_pagination(array(
                    'prev_text' => __('<', 'textdomain'),
                    'next_text' => __('>', 'textdomain'),
                )); ?>
                <!--/PAGER-->
        </section>
        <?php get_template_part('parts/blog/aside'); ?>
    </section>
    <!--/BLOG-->

<?php get_footer(); ?>