<?php
/**
 * Post card template part.
 */

$has_thumb = has_post_thumbnail();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($has_thumb ? 'jl-post-card' : 'jl-post-card no-thumb'); ?>>
    <?php if ($has_thumb) : ?>
        <div class="jl-post-thumb">
            <a href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail('medium_large'); ?>
            </a>
        </div>
    <?php endif; ?>

    <div>
        <div class="jl-meta">
            <?php echo esc_html(get_the_date()); ?>
            <span> / </span>
            <?php the_category(', '); ?>
        </div>

        <h2 class="jl-post-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>

        <div class="jl-excerpt">
            <?php the_excerpt(); ?>
        </div>

        <div class="jl-read-more">
            <a class="jl-button" href="<?php the_permalink(); ?>">
                <?php esc_html_e('Read more', 'jl-dark-lab'); ?>
            </a>
        </div>
    </div>
</article>
