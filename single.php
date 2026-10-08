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

                    <div class="jl-meta jl-single-meta">
                        <span class="jl-post-author">
                            <?php esc_html_e('By ', 'jl-wp-theme-dark'); ?>
                            <a href="<?php echo esc_url(get_author_posts_url((int) get_the_author_meta('ID'))); ?>">
                                <?php echo esc_html(get_the_author()); ?>
                            </a>
                        </span>
                        <span aria-hidden="true"> / </span>
                        <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
                            <?php echo esc_html(get_the_date()); ?>
                        </time>
                        <span aria-hidden="true"> / </span>
                        <span>
                            <?php esc_html_e('Filed under ', 'jl-wp-theme-dark'); ?><?php the_category(', '); ?>
                        </span>
                    </div>

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="jl-featured-image">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="jl-entry-content">
                        <?php the_content(); ?>
                    </div>

                    <?php
                    $jl_category_links = get_the_category_list(' ');
                    $jl_tag_links = get_the_tag_list('', ' ', '');
                    ?>
                    <?php if ($jl_category_links || $jl_tag_links) : ?>
                        <div class="jl-tax-links" aria-label="<?php esc_attr_e('Post topics', 'jl-wp-theme-dark'); ?>">
                            <?php if ($jl_category_links) : ?>
                                <section class="jl-tax-group">
                                    <h2 class="jl-tax-label"><?php esc_html_e('Categories', 'jl-wp-theme-dark'); ?></h2>
                                    <div class="jl-tax-items"><?php echo wp_kses_post($jl_category_links); ?></div>
                                </section>
                            <?php endif; ?>

                            <?php if ($jl_tag_links) : ?>
                                <section class="jl-tax-group">
                                    <h2 class="jl-tax-label"><?php esc_html_e('Tags', 'jl-wp-theme-dark'); ?></h2>
                                    <div class="jl-tax-items"><?php echo wp_kses_post($jl_tag_links); ?></div>
                                </section>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </article>
            <?php endwhile; ?>
        </section>

        <?php get_sidebar(); ?>
    </div>
</main>

<?php
get_footer();
