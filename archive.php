<? get_header() ?>

<main class="writingor--main" id="writingor--main">
    <div class="writingor--layout-9">
        <div class="writingor--layout-9__container writingor--container">
            <h1><?= sanitize_term_field(get_the_archive_title()) ?></h1>
            
            <?
            while (have_posts()) :
                the_post();
                get_template_part('template-parts/cards/card', '5');
            endwhile;
            ?>

            <div class="writingor--layout-9__pagination writingor--pagination-1">
                <?= paginate_links() ?>
            </div>
        </div>
    </div>
</main>

<? get_footer() ?>
