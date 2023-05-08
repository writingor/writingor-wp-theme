    <!-- footer-1 -->
    <footer data-layout='writingor--layout' class="writingor--footer writingor--footer-1">
        <div class="writingor--transition-to-prev-1"></div>
        <div class="writingor--footer-1__container writingor--container">
            <?
            if (function_exists('pll_current_language') && function_exists('the_field')) {
                $current_lang_slug = pll_current_language();
                echo "footer_content_$current_lang_slug.";
                the_field("footer_content_en", "option");

            } else {
                echo get_option('writingor__settings_footer_text_content');
            }
            ?>
        </div>
    </footer>
    <!--/ footer-1 -->

    <!-- to top -->
    <a href="#writingor--body" class="writingor--to-top writingor--anchor"><?= esc_html__('To top', 'writingor') ?></a>
    <!--/ to top -->

    <!-- MODALS -->

    <!-- text-me-modal-1 -->
    <div id="text-me-modal-1" class="writingor--modal">
        <div class="writingor--modal__hide"></div>
        <div class="writingor--modal__content">
            <?= do_shortcode('[writingor__form_1 title="'. esc_attr__('Write task', 'writingor') .'"]') ?>
        </div>
    </div>
    <!--/ text-me-modal-1 -->
    
    <!--/ MODALS -->

    <? wp_footer() ?>

</body>
</html>