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
<!-- layout-6 (<?= str_replace('writingor--', '', $layout_id) ?>) -->
<div <?= $layout_id_attr ?> class="writingor--layout writingor--layout-6 <?= $layout_id ?>">
    <div class="writingor--layout-6__container writingor--container">
        <div class="writingor--layout-6__header">
            <h2 class="writingor--title-1">
                ОТЗЫВЫ В СОЦСЕТЯХ
                <small>
                    легко проверить
                </small>
            </h2>
        </div>
    </div>

    <div class="writingor--layout-6__main">
        <div class="writingor--layout-6__slider swiper">
            <div class="swiper-wrapper">
                <!-- card-4 -->
                <a href="#" class="swiper-slide writingor--card-4">
                    <h3 class="writingor--card-4__title">
                        Валерия 1
                        <img src="<?= $dir ?>/assets/images/icon/arrow-1.svg" alt="link icon" class="writingor--card-4__link-icon">
                    </h3>
                    <p>
                        Нужно было вёрстку
                        под реакт-приложение.
                        Всё было сделано
                        компонентами, по
                        методологии БЭМ.
                    </p>
                    <p>
                        Сроки соблюдены, буду ещё
                        обращаться!
                    </p>
                </a>
                <!--/ card-4 -->
                <!-- card-4 -->
                <a href="#" class="swiper-slide writingor--card-4">
                    <h3 class="writingor--card-4__title">
                        Валерия 2
                        <img src="<?= $dir ?>/assets/images/icon/arrow-1.svg" alt="link icon" class="writingor--card-4__link-icon">
                    </h3>
                    <p>
                        Нужно было вёрстку
                        под реакт-приложение.
                        Всё было сделано
                        компонентами, по
                        методологии БЭМ.
                    </p>
                    <p>
                        Сроки соблюдены, буду ещё
                        обращаться!
                    </p>
                </a>
                <!--/ card-4 -->
                <!-- card-4 -->
                <a href="#" class="swiper-slide writingor--card-4">
                    <h3 class="writingor--card-4__title">
                        Валерия 3
                        <img src="<?= $dir ?>/assets/images/icon/arrow-1.svg" alt="link icon" class="writingor--card-4__link-icon">
                    </h3>
                    <p>
                        Нужно было вёрстку
                        под реакт-приложение.
                        Всё было сделано
                        компонентами, по
                        методологии БЭМ.
                    </p>
                    <p>
                        Сроки соблюдены, буду ещё
                        обращаться!
                    </p>
                </a>
                <!--/ card-4 -->
                <!-- card-4 -->
                <a href="#" class="swiper-slide writingor--card-4">
                    <h3 class="writingor--card-4__title">
                        Валерия 4
                        <img src="<?= $dir ?>/assets/images/icon/arrow-1.svg" alt="link icon" class="writingor--card-4__link-icon">
                    </h3>
                    <p>
                        Нужно было вёрстку
                        под реакт-приложение.
                        Всё было сделано
                        компонентами, по
                        методологии БЭМ.
                    </p>
                    <p>
                        Сроки соблюдены, буду ещё
                        обращаться!
                    </p>
                </a>
                <!--/ card-4 -->
                <!-- card-4 -->
                <a href="#" class="swiper-slide writingor--card-4">
                    <h3 class="writingor--card-4__title">
                        Валерия 5
                        <img src="<?= $dir ?>/assets/images/icon/arrow-1.svg" alt="link icon" class="writingor--card-4__link-icon">
                    </h3>
                    <p>
                        Нужно было вёрстку
                        под реакт-приложение.
                        Всё было сделано
                        компонентами, по
                        методологии БЭМ.
                    </p>
                    <p>
                        Сроки соблюдены, буду ещё
                        обращаться!
                    </p>
                </a>
                <!--/ card-4 -->
                <!-- card-4 -->
                <a href="#" class="swiper-slide writingor--card-4">
                    <h3 class="writingor--card-4__title">
                        Валерия 6
                        <img src="<?= $dir ?>/assets/images/icon/arrow-1.svg" alt="link icon" class="writingor--card-4__link-icon">
                    </h3>
                    <p>
                        Нужно было вёрстку
                        под реакт-приложение.
                        Всё было сделано
                        компонентами, по
                        методологии БЭМ.
                    </p>
                    <p>
                        Сроки соблюдены, буду ещё
                        обращаться!
                    </p>
                </a>
                <!--/ card-4 -->
            </div>
        </div>
    </div>
</div>
<!--/ layout-6 (<?= str_replace('writingor--', '', $layout_id) ?>) -->