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
<!-- layout-2 (<?= str_replace('writingor--', '', $layout_id) ?>) -->
<div <?= $layout_id_attr ?> class="writingor--layout writingor--layout-2 <?= $layout_id ?>">
    <div class="writingor--layout-2__container writingor--container">
        <div class="writingor--layout-2__header">
            <h2 class="writingor--title-1">ОБО МНЕ</h2>
        </div>
        <div class="writingor--layout-2__main">
            <div class="writingor--layout-2__cover">
                <img src="<?= $dir ?>/assets/images/other/photo-1.png" alt="writingor photo">
            </div>
            <div class="writingor--layout-2__content">
                <p>
                    Всем привет! Меня зовут Игорь. 
                </p>
                <p>
                    Я — <b>профессиональный верстальщик</b> сайтов с опытом полного цикла разработки.
                </p>
                <hr>
                <h3>В работе предпочитаю использовать:</h3>
                <ul>
                    <li><b>БЭМ-методологию</b> — как стайлгайд для написания переиспользуемых компонентов</li>
                    <li><b>PUG</b> — для оптимизации структуры кода DOM-элементов</li>
                    <li><b>SASS</b> — для автоматизации поддержки кроссбраузерности и огранизации кода стилей</li>
                    <li><b>Gulp</b> — для автоматизации прочих рутинных задач, таких как: работа с картинками, преобразование шрифтов</li>
                </ul>
                <hr>
                <p>
                    Я люблю свою работу и постоянно совершенствую навыки, изучая новые перспективные технологии и методы веб-разработки.
                </p>
                <p>
                    Если вы ищете верстальщика, готового к работе в команде или индивидуально, свяжитесь со мной, и мы обсудим ваш проект!
                </p>
                <hr>
                <p>
                    <a href="#writingor--contacts-section" class="writingor--anchor">
                        Соцсети и Контакты
                    </a>
                </p>
                <a href="#text-me-modal-1" data-modal class="writingor--button-3">
                    Написать
                </a>
            </div>
        </div>
    </div>
    <div class="writingor--transition-to-next-1"></div>
</div>
<!--/ layout-2 (<?= str_replace('writingor--', '', $layout_id) ?>) -->