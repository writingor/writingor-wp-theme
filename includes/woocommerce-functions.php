<?

/**
 * Add woocommerce
 */

add_action('after_setup_theme', 'writingor__add_woocommerce_support');

function writingor__add_woocommerce_support() {
    add_theme_support('woocommerce');
}