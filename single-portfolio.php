<? get_header() ?>

<main class="writingor--main" id="writingor--main">
    <div class="writingor--layout-9">
        <div class="writingor--layout-9__container writingor--container">
            <h1><? the_title() ?> (Portfolio)</h1>
            <? the_content() ?>

            <?
            /**
             * Tabs ACF
             */
            if (have_rows('tabs')) : ?>
                <? while (have_rows('tabs')) : the_row() ?>
                    <h2><?= esc_html(get_sub_field('title')) ?></h2>

                    <div class="tab-content">
                        <?= get_sub_field('text_content') ?>

                        <? if (get_sub_field('link')) :
                            $link = get_sub_field('link');
                            $attrs = '';
                            
                            if (get_sub_field('is_modal')) {
                                $link = esc_attr($link);
                                $attrs .= " data-modal='$link'";

                            } else if (get_sub_field('is_anchor')) {
                                $attrs .= " class='writingor--anchor'";
                            }
                        ?>
                            <a <?= $attrs ?> href="<?= esc_url($link) ?>">
                                <?= esc_html(get_sub_field('link_text')) ?>
                            </a>
                        <? endif ?>
                    </div>
                <? endwhile ?>
            <? endif ?>
        </div>
    </div>
</main>

<? get_footer() ?>
