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
<!-- layout-7 (<?= str_replace('writingor--', '', $layout_id) ?>) -->
<div <?= $layout_id_attr ?> class="writingor--layout writingor--layout-7 <?= $layout_id ?>">
    <div class="writingor--transition-to-prev-1"></div>
    <div class="writingor--layout-7__container writingor--container">
        <form method="post" class="writingor--form-1" action="<?= admin_url('admin-ajax.php') ?>">
            <h2 class="writingor--form-1__title">
                закажи
                <br>
                прямо сейчас!
            </h2>
            <?= str_replace('id="', 'data-id="', wp_nonce_field('writingor_send_contact_and_task', 'nonce', false, false)) ?>
            <input type="hidden" name="form_name" value="">
            <input type="text" name="name" placeholder="Имя" style="display: none">
            <input type="text" name="contact" placeholder="Любой контакт (подпиши)">
            <textarea name="task" placeholder="Задача"></textarea>
            <p class="writingor--form-1__response-message"></p>
            <button data-text-1="отправить" data-text-2="отправка..." class="writingor--button-4">отправить</button>
            <p class="writingor--form-1__agreement">
                Отправляя форму вы соглашаетесь с
                <a href="#" target="_blank" rel="noreferrer noopener">
                    правилами обработки персональных данных
                </a>
                .
            </p>
        </form>
    </div>
    <div class="writingor--transition-to-next-1"></div>
</div>
<!--/ layout-7 (<?= str_replace('writingor--', '', $layout_id) ?>) -->