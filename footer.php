<?php
/**
 * Footer template.
 */
?>
<footer class="jl-site-footer">
    <div class="jl-container jl-footer-inner">
        <div>
            &copy; <?php echo esc_html(date_i18n('Y')); ?> <?php bloginfo('name'); ?>.
            <span>All rights reserved.</span>
        </div>

        <nav aria-label="<?php esc_attr_e('Footer menu', 'jl-wp-theme-dark'); ?>">
            <?php
            wp_nav_menu([
                'theme_location' => 'footer',
                'container'      => false,
                'fallback_cb'    => false,
                'depth'          => 1,
            ]);
            ?>
        </nav>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
