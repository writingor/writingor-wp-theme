    <!-- footer-1 -->
    <footer data-layout='writingor--layout' class="writingor--footer writingor--footer-1">
        <div class="writingor--transition-to-prev-1"></div>
        <div class="writingor--footer-1__container writingor--container">
            <?= get_option( 'writingor__settings_footer_text_content' ) ?>
        </div>
    </footer>
    <!--/ footer-1 -->

    <!-- to top -->
    <a href="#writingor--top-section" class="writingor--to-top writingor--anchor">Наверх</a>
    <!--/ to top -->

    <!-- MODALS -->

    <!-- text-me-modal-1 -->
    <div id="text-me-modal-1" class="writingor--modal">
        <div class="writingor--modal__hide"></div>
        <div class="writingor--modal__content">
            <?= do_shortcode('[writingor__form_1 title="Опишите задачу"]') ?>
        </div>
    </div>
    <!--/ text-me-modal-1 -->
    
    <!--/ MODALS -->

    <? wp_footer() ?>

</body>
</html>