<?php
/**
 * Single post template.
 */

get_header();
?>

<main class="jl-main">
    <div class="jl-container jl-layout">
        <section>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('jl-content-card'); ?>>
                    <p class="jl-kicker"><?php echo esc_html(get_the_date()); ?></p>
                    <h1 class="jl-page-title"><?php the_title(); ?></h1>

                    <div class="jl-meta">
                        <?php esc_html_e('Filed under ', 'jl-wp-theme-dark'); ?><?php the_category(', '); ?>
                    </div>

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="jl-featured-image">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="jl-entry-content">
                        <?php the_content(); ?>
                    </div>

                    <div class="jl-tax-links">
                        <div><?php the_category(' '); ?></div>
                        <div><?php the_tags('', ' ', ''); ?></div>
                    </div>
                </article>
            <?php endwhile; ?>
        </section>

        <?php get_sidebar(); ?>
    </div>
</main>

<?php
get_footer();
