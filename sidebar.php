<?php
/**
 * Sidebar template.
 */
?>
<aside class="jl-sidebar">
    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
    <?php else : ?>
        <section class="widget">
            <h2 class="widget-title"><?php esc_html_e('Categories', 'jl-wp-theme-dark'); ?></h2>
            <ul>
                <?php wp_list_categories(['title_li' => '']); ?>
            </ul>
        </section>

        <section class="widget">
            <h2 class="widget-title"><?php esc_html_e('Recent Posts', 'jl-wp-theme-dark'); ?></h2>
            <ul>
                <?php
                wp_get_archives([
                    'type'  => 'postbypost',
                    'limit' => 6,
                ]);
                ?>
            </ul>
        </section>
    <?php endif; ?>
</aside>
