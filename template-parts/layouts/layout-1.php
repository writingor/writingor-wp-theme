<?
/**
 * Prepare
 * template variables
 */
$dir = '';
$layout_id = '';
$layout_id_attr = '';

if ($args['dir']) {
    $dir = $args['dir'];
}

if ($args['id']) {
    $layout_id = $args['id'];
    $layout_id_attr = "id=\"$layout_id\"";
}

/**
 * HTML
 * Render
 */
?>
<!-- layout-1 (<?= str_replace('writingor--', '', $layout_id) ?>) -->
<div <?= $layout_id_attr ?> class="writingor--layout writingor--layout-1 <?= $layout_id ?>">
    <div class="writingor--layout-1__container writingor--container">
        <h1>
            Закажи
            <b>профессиональную</b>
            <i>вёрстку</i>
            <small>
                у частного 
                разработчика
            </small>
        </h1>
        <a href="#writingor--services-section" class="writingor--button-2 writingor--anchor">
            Услуги
        </a>
    </div>
    <div class="writingor--transition-to-next-1"></div>
</div>
<!--/ layout-1 (<?= str_replace('writingor--', '', $layout_id) ?>) -->