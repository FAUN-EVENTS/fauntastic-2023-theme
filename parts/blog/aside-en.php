<aside id="posts-w">
    <form>
        <input type="text" name="search" id="search" placeholder="Search...">
        <input type="image" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/search-button.png" alt="search-img">
    </form>
    <article class="posts-w popular">
        <h6>Latest articles</h6>
        <hr>
        <?php fauntastic_last_posts_blog(); ?>
    </article>
    
    <article id="news-archive">
        <h6>Archives</h6>
        <hr>
        <ul class="list-items">
            <?php wp_get_archives(); ?>
        </ul>
    </article>
</aside>
<div class="cleaner"></div>