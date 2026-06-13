<?php
/**
 * Search results template.
 */

get_header();
?>

<main class="jl-main">
    <div class="jl-container jl-layout">
        <section>
            <div class="jl-content-card" style="margin-bottom:22px;">
                <p class="jl-kicker"><?php esc_html_e('Search', 'jl-dark-lab'); ?></p>
                <h1 class="jl-page-title">
                    <?php
                    printf(
                        esc_html__('Results for “%s”', 'jl-dark-lab'),
                        esc_html(get_search_query())
                    );
                    ?>
                </h1>
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
                        <h2><?php esc_html_e('No results found', 'jl-dark-lab'); ?></h2>
                        <?php get_search_form(); ?>
                    </article>
                <?php endif; ?>
            </div>
        </section>

        <?php get_sidebar(); ?>
    </div>
</main>

<?php
get_footer();
