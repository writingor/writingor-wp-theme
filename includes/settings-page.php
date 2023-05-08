<?
/**
 * Add options page
 */

add_action('admin_menu', 'writingor_admin_menu');

function writingor_admin_menu() {
    add_menu_page(
        __('Theme settings', 'writingor'),
        __('Theme settings', 'writingor'),
        'manage_options',
        'writingor-page',
        'writingor_admin_page_contents',
        'dashicons-schedule',
        3
    );
    add_submenu_page(
        'writingor-page',
        __('Footer', 'writingor'),
        __('Footer', 'writingor'),
        'manage_options',
        'woo-wholesale-registrations',
        'wwpr_page_call'
    ); 
}

function writingor_admin_page_contents() {
    ?>
    <h1><?= esc_html__('Theme settings', 'writingor') ?></h1>
    <form method="POST" action="options.php">
        <?
        settings_fields('writingor-page');
        do_settings_sections('writingor-page');
        submit_button();
        ?>
    </form>
    <?
}

add_action('admin_init', 'writingor_settings_init');

function writingor_settings_init() {

    add_settings_section(
        'writingor_page_setting_section',
        'Footer',
        'writingor_setting_section_callback_function',
        'writingor-page'
    );

    add_settings_field(
        'writingor__settings_footer_text_content',
        'Footer text content',
        'writingor_setting_markup',
        'writingor-page',
        'writingor_page_setting_section'
    );

    register_setting('writingor-page', 'writingor__settings_footer_text_content');
}

function writingor_setting_section_callback_function() {
    echo '<p>'. esc_html__('Use html p and a for formatting', 'writingor') . '</p>';
}

function writingor_setting_markup() {
    ?>
    <textarea name="writingor__settings_footer_text_content" id="writingor__settings_footer_text_content" cols="100" rows="10"><?= get_option( 'writingor__settings_footer_text_content' ) ?></textarea>
    <?
}