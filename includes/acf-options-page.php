<?
/**
 * ACF Options Page
 */

if (function_exists('acf_add_options_page')) {

    /**
     * ACF Theme Settings Page
     */

    $parent = acf_add_options_page([
        'menu_title' => __('ACF Theme Settings', 'writingor'),
        'page_title' => __('ACF Theme Settings', 'writingor'),
        'menu_slug'     => 'acf-options',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ]);

    /**
     * Language Specific Options
     * Translatable options specific languages
     */

    if (function_exists('pll_languages_list')) {
        $languages = pll_languages_list();

    } else {
        $languages = ['en'];
    }

    foreach ($languages as $lang) {
        acf_add_options_sub_page([
            'page_title' => __("Options", 'writingor') . ' ' . strtoupper($lang),
            'menu_title' => __("Options", 'writingor') . ' ' . strtoupper($lang),
            'menu_slug'  => "acf-options-$lang",
            'post_id'    => "acf_options_$lang",
            'parent'     => $parent['menu_slug']
        ]);
    }
}