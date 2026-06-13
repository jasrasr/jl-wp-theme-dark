<?php
/**
 * Search form template.
 */
?>
<form role="search" method="get" class="jl-search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="screen-reader-text" for="s"><?php esc_html_e('Search for:', 'jl-wp-theme-dark'); ?></label>
    <input type="search" id="s" name="s" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="<?php esc_attr_e('Search posts...', 'jl-wp-theme-dark'); ?>">
    <button type="submit"><?php esc_html_e('Search', 'jl-wp-theme-dark'); ?></button>
</form>
