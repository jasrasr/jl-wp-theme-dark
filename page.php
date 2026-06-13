<?php
/**
 * Page template.
 */

get_header();
?>

<main class="jl-main">
    <div class="jl-container">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('jl-content-card'); ?>>
                <h1 class="jl-page-title"><?php the_title(); ?></h1>
                <div class="jl-entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</main>

<?php
get_footer();
