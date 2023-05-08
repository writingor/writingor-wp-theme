<?

/**
 * Theme version
 */

if (!defined('THEME_V')) {
    define('THEME_V', wp_get_theme()->get('Version'));
}

/**
 * Theme directory
 */

if (!defined('THEME_DIR')) {
    define('THEME_DIR', get_template_directory_uri());
}

/**
 * Disable authors page
 */

add_action('parse_query', 'writingor__disable_authors_page');

function writingor__disable_authors_page($query) {
    if(is_author()) {
        wp_redirect(home_url());
        exit;
    }
}

/**
 * Theme setup
 */

add_action('after_setup_theme', 'writingor__theme_setup');

function writingor__theme_setup() {
    /**
     * Disable API
     */
    remove_action('wp_head', 'rsd_link');

    /**
     * Disable wp version generator
     */
    remove_action('wp_head', 'wp_generator');

    /**
     * Disable theme editor
     */
    define('DISALLOW_FILE_EDIT', true);

    /**
     * Disable type attribute
     * fo script and style
     */
    add_theme_support('html5', ['script', 'style']);

    /**
     * Add <title> render
     */
    add_theme_support('title-tag');

    /**
     * Thumbnail
     */
    add_theme_support('post-thumbnails');

    /**
     * Add theme translate
     */
    load_theme_textdomain('writingor', THEME_DIR . '/assets/languages');
}

/**
 * Disable unsusable
 * img sizes
 */

add_filter('intermediate_image_sizes_advanced', 'writingor__unset_image_sizes');

function writingor__unset_image_sizes($sizes) {
    unset($sizes['medium_large']);
    unset($sizes['large']);
    unset($sizes['1536x1536']);
    unset($sizes['2048x2048']);
    return $sizes;
}

/**
 * Add post meta
 */

include get_theme_file_path('/includes/post-meta.php');

/**
 * Add post types
 */

include get_theme_file_path('/includes/post-types.php');

/**
 * Add shortcodes
 */

include get_theme_file_path('/includes/shortcodes.php');

/**
 * Add theme settings page
 */

include get_theme_file_path('/includes/settings-page.php');

/**
 * Add gutenberg
 * block category
 */
function writingor__add_gutebnerg_block_categories($categories) {
    return array_merge(
        [
            [
                'slug'  => 'writingor',
                'title' => 'writingor Blocks'
            ]
        ],
        $categories
    );
}
add_action('block_categories', 'writingor__add_gutebnerg_block_categories', 10, 2);

/**
 * Add styles
 */

add_action('wp_enqueue_scripts', 'writingor__enqueue_styles');
add_action('enqueue_block_editor_assets', 'writingor__enqueue_styles');

function writingor__enqueue_styles() {
    if (!is_admin()) {
        wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', [], '9', 'all');
        wp_enqueue_style('writingor', THEME_DIR . '/assets/styles/css/style.min.css', ['swiper'], THEME_V, 'all');
    }

    if (is_admin()) {
        wp_enqueue_style('writingor--admin-gutenberg', THEME_DIR . '/assets/styles/css/admin-gutenberg.css', [], THEME_V, 'all');
    }
}

/**
 * Add scripts
 */

add_action('wp_enqueue_scripts', 'writingor__enqueue_scripts');
add_action('enqueue_block_editor_assets', 'writingor__enqueue_scripts');

function writingor__enqueue_scripts() {

    if (!is_admin()) {
        wp_enqueue_script('jquery');
        wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', [], '9', true);
        wp_enqueue_script('writingor', THEME_DIR . '/assets/scripts/js/script.js', ['jquery', 'swiper'], THEME_V, true);

        $variables = [
            'url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('writingor--ajax-global-nonce')
        ];

        if (function_exists('pll_current_language')) {
            $variables['lang'] = pll_current_language();
        }

        wp_localize_script('writingor', 'writingor__ajax_variables', $variables);
    }

    if (is_admin()) {
        wp_enqueue_script('writingor--admin-gutenberg', THEME_DIR . '/assets/scripts/js/admin-gutenberg.js', [
            'wp-blocks',
            'wp-i18n',
            'wp-editor'
        ], THEME_V, true);
    }
}

/**
 * send_contact_and_task
 */

include get_theme_file_path('/includes/ajax/send-contact-and-task.php');

/**
 * get_more_portfolio_posts
 */

include get_theme_file_path('/includes/ajax/get-more-portfolio-posts.php');
