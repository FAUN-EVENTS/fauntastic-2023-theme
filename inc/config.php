<?php

    function fauntastic_register_assets(){
        wp_enqueue_style('stylesheet',get_template_directory_uri().'/style.css');
        fauntastic_menu_navigation();

        if(is_home() || is_front_page()){
            wp_enqueue_style('stylesheet',get_stylesheet_directory_uri().'/assets/css/xmcountdown.css');
            fauntastic_enqueue_scripts();
        } elseif (is_page("programme")){
            fauntastic_enqueue_scripts();
        };
    };

    function fauntastic_enqueue_scripts(){
        wp_enqueue_script('jquery');
        wp_enqueue_script('calendar',get_stylesheet_directory_uri().'/assets/js/calendar.js');
    };

    function fauntastic_menu_navigation(){
        wp_enqueue_script('menu',get_template_directory_uri().'/assets/js/menu-nav.js',array('jquery'), '20160909', true);
    };

    add_action("wp_enqueue_scripts","fauntastic_register_assets");