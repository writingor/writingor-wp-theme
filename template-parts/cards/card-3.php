<?
$index = $args['index'];
$visible = $args['visible'];
$add_onclick = $args['add_onclick'];

$classlist = 'writingor--card-3';

if ($visible) {
    $classlist .= ' writingor--visible';
}

if ($add_onclick) {
    $onclick = " onclick=\"showModal(event.target.closest('[data-modal]'))\"";
}
?>

<!-- card-3 (№ <?= $index ?>) -->
<div data-modal="#writingor--portfolio-modal-<?= $index ?>" class="<?= esc_attr($classlist) ?>"<?= $onclick ?>>
    <img loading="lazy" src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>" alt="<?= esc_attr(get_the_title()) ?>">
    <!-- portfolio-modal-<?= $index ?> -->
    <div id="writingor--portfolio-modal-<?= $index ?>" class="writingor--modal writingor--portfolio-modal-1">
        <div class="writingor--modal__hide"></div>
        <div class="writingor--modal__content">
            <div class="writingor--portfolio-modal-1__main-img">
                <h3 class="writingor--portfolio-modal-1__title">
                    <? the_title() ?>
                </h3>
                <div class="writingor--portfolio-modal-1__main-img">
                    <img loading="lazy" src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>" alt="<?= esc_attr(get_the_title()) ?>">
                </div>
                <p>
                    <? the_excerpt() ?>
                </p>
                <p><a rel="noreferrer noopener" target="_blank" href="<?= get_post_permalink() ?>"><?= esc_html__('View', 'writingor') ?></a></p>
            </div>
        </div>
    </div>
    <!--/ portfolio-modal-<?= $index ?> -->
</div>
<!--/ card-3 (№ <?= $index ?>) -->