<?php get_header(); ?>

    <?php get_template_part('parts/staff'); ?>

    <section class="page-section">
    <h2><?php the_title(); ?></h2>
    <hr>
    <?php get_template_part('parts/tickets'); ?>

    <?php echo the_content(); ?>
    </section>

    <div class="cleaner"></div>
<?php get_footer(); ?>