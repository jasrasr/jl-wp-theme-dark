<?php
/**
 * 404 template.
 */

get_header();
?>

<main class="jl-main">
    <div class="jl-container">
        <article class="jl-content-card">
            <p class="jl-kicker">404</p>
            <h1 class="jl-page-title"><?php esc_html_e('Page not found', 'jl-wp-theme-dark'); ?></h1>
            <p><?php esc_html_e('That page wandered off into the server closet. Try searching instead.', 'jl-wp-theme-dark'); ?></p>
            <?php get_search_form(); ?>
        </article>
    </div>
</main>

<?php
get_footer();
