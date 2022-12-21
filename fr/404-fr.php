<?php get_header(); ?>

<section>

    <img src="<?= get_template_directory_uri() ?>/assets/images/404.png" alt="404 Not Found :["
         style="max-width: 400px; display: block; margin-left: auto; margin-right: auto"
    >
    <p style="text-transform: uppercase; text-align: center">Uhoh...</p>
    <p style="text-align: center">La page que vous avez demandé n'a pas été trouvée...</p>
    <p style="text-align: center">Si vous êtes perdu, rendez-vous en <a href="/en">Page d'accueil</a></p>
</section>

<?php get_footer(); ?>
