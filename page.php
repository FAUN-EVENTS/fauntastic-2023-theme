<?php get_header(); ?>

    <div class="header">
        <h1 class="title_header"><?php the_title(); ?></h1>
    </div>

    <section class="page-section">
    <?php echo the_content(); ?>
    </section>

    <div class="cleaner"></div>
<?php get_footer(); ?>