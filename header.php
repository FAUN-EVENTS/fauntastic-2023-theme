<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 

	<?php wp_head(); ?>
</head>
<body

    <?php body_class(); ?>>
    <?php $slug = htmlspecialchars(get_post_field('post_name', get_post())); ?>
    <!--NAVIGATION-->
	<div id="nav-wrap" class="sticky">
		<div id="nav-wrap-menu">
		<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/fauntastic-logo.png" alt="" style="width: 64px; margin: auto;"></a>
			<nav id="main-nav">
				<button class="menu-toggle"><img src="<?php echo get_template_directory_uri();?>/assets/images/menu-icon.svg" alt="" srcset=""></button>
				<?php
				$args=array(
					'theme_location' => 'main',
					"container" => 'ul',
					'menu_class' => 'menu',
					'menu_id' => 'menu-menu'
				);
				wp_nav_menu($args); 
				?>
			</nav>
			<div class="flags">
                <a href="/en/<?= $slug; ?>"><p>🇬🇧</p></a>
				<a href="/fr/<?= $slug; ?>"><p>🇫🇷</p></a>
			</div>
            <!-- Coming soon ;)
			<div id="button-connexion">
				<a href="#">connexion</a>
			</div>
			-->
		</div>
	</div>
	
	<!--/NAVIGATION-->
    
    <?php wp_body_open(); ?>