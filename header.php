<?php
/**
 * Header template.
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="jl-site-header">
    <div class="jl-container jl-header-inner">
        <a class="jl-brand" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <span class="jl-brand-mark" aria-hidden="true">
                <?php if (has_custom_logo()) : ?>
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    echo wp_get_attachment_image($custom_logo_id, 'thumbnail', false, ['class' => 'jl-logo-img']);
                    ?>
                <?php else : ?>
                    <img class="jl-logo-img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/jl-logo.png'); ?>" alt="" />
                <?php endif; ?>
            </span>
            <span class="jl-brand-text">
                <strong><?php bloginfo('name'); ?></strong>
                <span><?php bloginfo('description'); ?></span>
            </span>
        </a>

        <nav class="jl-nav" aria-label="<?php esc_attr_e('Primary menu', 'jl-dark-lab'); ?>">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'fallback_cb'    => 'jl_dark_lab_fallback_menu',
                'depth'          => 2,
            ]);
            ?>
        </nav>
    </div>
</header>
