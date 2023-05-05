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
<!-- layout-4 (<?= str_replace('writingor--', '', $layout_id) ?>) -->
<div <?= $layout_id_attr ?> class="writingor--layout writingor--layout-4 <?= $layout_id ?>">
    <div class="writingor--layout-4__container writingor--container">
        <div class="writingor--layout-4__header">
            <h2 class="writingor--title-1">
                УСЛУГИ
                <small>
                    Тариф 3&nbsp;000₽ в&nbsp;день
                </small>
                <small>
                    Предоплата 50% в день старта работ
                </small>
            </h2>
        </div>
        <div class="writingor--layout-4__cards">
            <!-- card-2 -->
            <div class="writingor--card-2">
                <div class="writingor--card-2__icon">
                    <img src="<?= $dir ?>/assets/images/other/verstka.png" alt="icon">
                </div>
                <div class="writingor--card-2__body">
                    <div class="writingor--card-2__main">
                        <h3 class="writingor--card-2__title">
                            Вёрстка
                        </h3>
                        <p>
                            Респонсивно-адаптивная вёрстка под различные CMS и фреймворки
                            по методологии БЭМ.
                        </p>
                    </div>
                    <div class="writingor--card-2__footer">
                        <div class="writingor--card-2__terms">
                            <div class="writingor--card-2__price">
                                <small>от</small>
                                6&nbsp;000₽
                            </div>
                            <div class="writingor--card-2__production-time"> 
                                <small>от</small>
                                2х
                                <small>рабочих&nbsp;дней</small>
                            </div>
                        </div>
                        <a href="#get-service-modal-1" data-modal class="writingor--button-1">
                            Заказать
                        </a>
                    </div>
                </div>
            </div>
            <!--/ card-2 -->
            <!-- card-2 -->
            <div class="writingor--card-2">
                <div class="writingor--card-2__icon">
                    <img src="<?= $dir ?>/assets/images/other/frontend.png" alt="icon">
                </div>
                <div class="writingor--card-2__body">
                    <div class="writingor--card-2__main">
                        <h3 class="writingor--card-2__title">
                            Front-end
                        </h3>
                        <p>
                            Разработка клиентской части сайта. Валидация, работа с API.
                            Возможно использование Vue, Angular, React, Svelte.
                        </p>
                    </div>
                    <div class="writingor--card-2__footer">
                        <div class="writingor--card-2__terms">
                            <div class="writingor--card-2__price">
                                <small>от</small>
                                9&nbsp;000₽
                            </div>
                            <div class="writingor--card-2__production-time">
                                <small>от</small>
                                3х
                                <small>рабочих&nbsp;дней</small>
                            </div>
                        </div>
                        <a href="#get-service-modal-2" data-modal class="writingor--button-1">
                            Заказать
                        </a>
                    </div>
                </div>
            </div>
            <!--/ card-2 -->
            <!-- card-2 -->
            <div class="writingor--card-2">
                <div class="writingor--card-2__icon">
                    <img src="<?= $dir ?>/assets/images/other/fullstack.png" alt="icon">
                </div>
                <div class="writingor--card-2__body">
                    <div class="writingor--card-2__main">
                        <h3 class="writingor--card-2__title">
                            Full-stack
                        </h3>
                        <p>
                            Полноценная разработка сайта на WordPress или ASP.NET.
                        </p>
                    </div>
                    <div class="writingor--card-2__footer">
                        <div class="writingor--card-2__terms">
                            <div class="writingor--card-2__price">
                                <small>от</small>
                                12&nbsp;000₽
                            </div>
                            <div class="writingor--card-2__production-time">
                                <small>от</small>
                                4х
                                <small>рабочих&nbsp;дней</small>
                            </div>
                        </div>
                        <a href="#get-service-modal-3" data-modal class="writingor--button-1">
                            Заказать
                        </a>
                    </div>
                </div>
            </div>
            <!--/ card-2 -->
        </div>
    </div>
</div>
<!--/ layout-4 (<?= str_replace('writingor--', '', $layout_id) ?>) -->