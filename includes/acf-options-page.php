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
     * Global Options
     * Same options on all languages
     */

    acf_add_options_sub_page([
        'page_title' => __('Theme Global Options', 'writingor'),
        'menu_title' => __('Theme Global Options', 'writingor'),
        'menu_slug'  => "acf-options-global",
        'parent'     => $parent['menu_slug']
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
            'page_title' => __('Options (' . strtoupper($lang) . ')', 'writingor'),
            'menu_title' => __('Options (' . strtoupper($lang) . ')', 'writingor'),
            'menu_slug'  => "acf-options-${lang}",
            'post_id'    => $lang,
            'parent'     => $parent['menu_slug']
        ]);
    }
}