<?php get_header(); ?>

<section>

    <img src="<?= get_template_directory_uri() ?>/assets/images/404.png" alt="404 Not Found :["
         style="max-width: 100%; width: 400px; display: block; margin-left: auto; margin-right: auto"
    >
    <p style="text-transform: capitalize; text-align: center">Uhoh...</p>
    <p style="text-align: center">The page you requested was not found</p>
    <p style="text-align: center">However, you'll always find your way on the <a href="/en">Home page</a></p>
</section>

<?php get_footer(); ?>
