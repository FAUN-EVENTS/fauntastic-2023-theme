<?php

    abstract class FauntasticRegState {
        const CLOSED = 1;
        const SOON = 2;
        const OPEN = 4 ;
        const SOLD_OUT = 8;
    }
    // Set default state
    $fauntastic_registration_state = null;

    function fauntastic_last_posts(){ 
        $recentPosts = new WP_Query();
        $recentPosts->query('showposts=3');

        echo '<ul class="posts small">';
        
        while ($recentPosts->have_posts()) : $recentPosts->the_post();
            echo ('<li><figure class="imgLiquidFill">'.get_the_post_thumbnail()
            .'</figure><article><h5>'.get_the_title().'</h5><span class="date">'
            .get_the_date().'</span><p>'.get_the_excerpt().'</p><a href="'
            .get_the_permalink().'"class="button ruby">VOIR PLUS</a></article></li>');
        endwhile;
        
        echo '</ul>';
    };

    function fauntastic_last_posts_footer(){ 
        $recentPosts = new WP_Query();
        $recentPosts->query('showposts=3');
        while ($recentPosts->have_posts()) : $recentPosts->the_post();
            echo ('<article><a href="'.get_the_permalink().'">'.get_the_title().'</a><span class="date">'
            .get_the_date().'</span></article>');
        endwhile;
    };

    function fauntastic_last_posts_blog(){ 
        $recentPosts = new WP_Query();
        $recentPosts->query('showposts=6');
        while ($recentPosts->have_posts()) : $recentPosts->the_post();
            echo ('<article><a href="'.get_the_permalink().'">'.get_the_title().'</a></article>');
        endwhile;
    };

    if(!function_exists("fauntastic_get_registration_state"))
    {
        function fauntastic_get_registration_state(): string
        {
            global $fauntastic_registration_state;

            if(isset($fauntastic_registration_state) && is_string($fauntastic_registration_state))
            {
                return $fauntastic_registration_state;
            }

            $api_endpoint = "https://registration.fauntastic.eu/rest/register";
            $ch = curl_init($api_endpoint);

            curl_setopt_array($ch, [
                CURLOPT_HEADER => 0,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT => 500
            ]);
            curl_setopt($ch, CURLOPT_HEADER, 0);

            $data = json_decode(curl_exec($ch), true);
            if(curl_error($ch)) {
                $data = ["_embedded" => ["state" => "REGISTRATION_NOT_STARTED"]];
            }
            curl_close($ch);
            // Get image name considering the returned state from the API
            switch($data["_embedded"]["state"])
            {
                case "REGISTRATION_IS_OPEN":
                case "REGISTRATION_ACCOUNT_OPEN":
                    $fauntastic_registration_state = FauntasticRegState::OPEN;
                    break;
                case "REGISTRATION_IS_OVER":
                case "REGISTRATION_IS_DONE":
                    $fauntastic_registration_state = FauntasticRegState::CLOSED;
                    break;
                case "REGISTRATION_ACCOUNT_CREATION_ONLY":
                    $fauntastic_registration_state = FauntasticRegState::SOLD_OUT;
                    break;
                default:
                    $fauntastic_registration_state = FauntasticRegState::SOON;
                    break;
            }
            return $fauntastic_registration_state;
        }
    }

    if(!function_exists("fauntastic_get_registration_banner"))
    {
        function fauntastic_get_registration_banner(): string
        {
            $state = fauntastic_get_registration_state();
            switch($state)
            {
                case FauntasticRegState::OPEN:
                    $img_name = "registration_open.png";
                    break;
                case FauntasticRegState::CLOSED:
                case FauntasticRegState::SOLD_OUT:
                    $img_name = "registration_closed.png";
                    break;
                default:
                    $img_name = "registration_open_soon.png";
                    break;
            }
            // Build and return image path
            return get_template_directory_uri() . "/assets/images/registration" . "/" . (is_lang_en() ? "en" : "fr") . "/" . $img_name;
        }
    }

    if(!function_exists("is_lang_en"))
    {
        function is_lang_en(): bool
        {
            $en_match = "/en/";
            $uri = $_SERVER["REQUEST_URI"];

            return (substr($uri, 0, strlen($en_match)) === $en_match);
        }
    }


    /****************************************************
     *
     *          SHORTCODES REGISTRATION
     *
     ****************************************************/
    add_shortcode("fauntastic_get_registration_banner", "fauntastic_get_registration_banner");

    register_nav_menus( array(
        'main' => 'Menu Principal',
        'footer' => 'Bas de page'
    ) );