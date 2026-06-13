<?php
/**
 * Archive template.
 */

get_header();
?>

<main class="jl-main">
    <div class="jl-container jl-layout">
        <section>
            <div class="jl-content-card" style="margin-bottom:22px;">
                <p class="jl-kicker"><?php esc_html_e('Archive', 'jl-wp-theme-dark'); ?></p>
                <h1 class="jl-page-title"><?php the_archive_title(); ?></h1>
                <div class="jl-excerpt"><?php the_archive_description(); ?></div>
            </div>

            <div class="jl-post-list">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('template-parts/content', 'card'); ?>
                    <?php endwhile; ?>

                    <div class="jl-pagination">
                        <?php the_posts_pagination(); ?>
                    </div>
                <?php else : ?>
                    <article class="jl-content-card">
                        <h2><?php esc_html_e('No posts found', 'jl-wp-theme-dark'); ?></h2>
                    </article>
                <?php endif; ?>
            </div>
        </section>

        <?php get_sidebar(); ?>
    </div>
</main>

<?php
get_footer();
