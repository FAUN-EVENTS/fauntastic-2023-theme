<?php get_header(); ?>

	<div id="header-wrap">
		<header>
			<article>
				<img id="logo-faun-header" src="<?php echo get_template_directory_uri();?>/assets/images/fauntastic-header.png" alt="">
				<div class="faun-header-networks">
					<a class="rounded-rose hover-rounded-blue" href="https://t.me/FauntasticCon"><img src="<?php echo get_template_directory_uri();?>/assets/images/fauntastic-logo-telegram-black.svg" /></a>
					<a class="rounded-rose hover-rounded-blue" href="https://twitter.com/FauntasticCon"><img src="<?php echo get_template_directory_uri();?>/assets/images/fauntastic-logo-twitter-black.svg" /></a>
				</div>
			</article>
            <div id="faun-header-btn">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/arrow-down.svg" alt="Go to Home" id="faun-intro" onclick="location.href='#faun-intro'" />
            </div>
        </header>
	</div>

	<section>
    	<?php echo the_content(); ?>
    </section>

<?php get_footer(); ?>