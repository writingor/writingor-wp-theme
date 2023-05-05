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
<!-- layout-5 (<?= str_replace('writingor--', '', $layout_id) ?>) -->
<div <?= $layout_id_attr ?> class="writingor--layout writingor--layout-5 <?= $layout_id ?>">
    <div class="writingor--layout-5__container writingor--container">
        <div class="writingor--layout-5__header">
            <h2 class="writingor--title-1">
                ПОРТФОЛИО
            </h2>
        </div>
    </div>
    <div class="writingor--layout-5__main">
        <div class="writingor--transition-to-prev-1"></div>

        <div class="writingor--layout-5__cards">
            <!-- card-3 -->
            <div data-modal="#writingor--portfolio-modal-1" class="writingor--card-3">
                <img loading="lazy" src="<?= $dir ?>/assets/images/other/1.png" alt="1">
                <!-- portfolio-modal-1 -->
                <div id="writingor--portfolio-modal-1" class="writingor--modal writingor--portfolio-modal-1">
                    <div class="writingor--modal__hide"></div>
                    <div class="writingor--modal__content">
                        <div class="writingor--portfolio-modal-1__main-img">
                            <h3 class="writingor--portfolio-modal-1__title">
                                Название Проекта
                            </h3>
                            <div class="writingor--portfolio-modal-1__main-img">
                                <img loading="lazy" src="<?= $dir ?>/assets/images/other/1.png" alt="1">
                            </div>
                            <p>
                                Описание проекта Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem rerum illum quia necessitatibus. Nobis, illo placeat.
                            </p>
                            <p>
                                <a href="#">https://site.ru/1</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--/ portfolio-modal-1 -->
            </div>
            <!--/ card-3 -->

            <!-- card-3 -->
            <div data-modal="#portfolio-modal-2" class="writingor--card-3">
                <img loading="lazy" src="<?= $dir ?>/assets/images/other/2.png" alt="2">
                <!-- portfolio-modal-2 -->
                <div id="portfolio-modal-2" class="writingor--modal writingor--portfolio-modal-1">
                    <div class="writingor--modal__hide"></div>
                    <div class="writingor--modal__content">
                        <div class="writingor--portfolio-modal-1__main-img">
                            <h3 class="writingor--portfolio-modal-1__title">
                                Название Проекта
                            </h3>
                            <div class="writingor--portfolio-modal-1__main-img">
                                <img loading="lazy" src="<?= $dir ?>/assets/images/other/2.png" alt="2">
                            </div>
                            <p>
                                Описание проекта Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem rerum illum quia necessitatibus. Nobis, illo placeat.
                            </p>
                            <p>
                                <a href="#">https://site.ru/2</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--/ portfolio-modal-2 -->
            </div>
            <!--/ card-3 -->

            <!-- card-3 -->
            <div data-modal="#portfolio-modal-3" class="writingor--card-3">
                <img loading="lazy" src="<?= $dir ?>/assets/images/other/3.png" alt="3">
                <!-- portfolio-modal-3 -->
                <div id="portfolio-modal-3" class="writingor--modal writingor--portfolio-modal-1">
                    <div class="writingor--modal__hide"></div>
                    <div class="writingor--modal__content">
                        <div class="writingor--portfolio-modal-1__main-img">
                            <h3 class="writingor--portfolio-modal-1__title">
                                Название Проекта
                            </h3>
                            <div class="writingor--portfolio-modal-1__main-img">
                                <img loading="lazy" src="<?= $dir ?>/assets/images/other/3.png" alt="3">
                            </div>
                            <p>
                                Описание проекта Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem rerum illum quia necessitatibus. Nobis, illo placeat.
                            </p>
                            <p>
                                <a href="#">https://site.ru/3</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--/ portfolio-modal-3 -->
            </div>
            <!--/ card-3 -->

            <!-- card-3 -->
            <div data-modal="#portfolio-modal-4" class="writingor--card-3">
                <img loading="lazy" src="<?= $dir ?>/assets/images/other/4.png" alt="4">
                <!-- portfolio-modal-4 -->
                <div id="portfolio-modal-4" class="writingor--modal writingor--portfolio-modal-1">
                    <div class="writingor--modal__hide"></div>
                    <div class="writingor--modal__content">
                        <div class="writingor--portfolio-modal-1__main-img">
                            <h3 class="writingor--portfolio-modal-1__title">
                                Название Проекта
                            </h3>
                            <div class="writingor--portfolio-modal-1__main-img">
                                <img loading="lazy" src="<?= $dir ?>/assets/images/other/4.png" alt="4">
                            </div>
                            <p>
                                Описание проекта Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem rerum illum quia necessitatibus. Nobis, illo placeat.
                            </p>
                            <p>
                                <a href="#">https://site.ru/4</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--/ portfolio-modal-4 -->
            </div>
            <!--/ card-3 -->

            <!-- card-3 -->
            <div data-modal="#portfolio-modal-5" class="writingor--card-3">
                <img loading="lazy" src="<?= $dir ?>/assets/images/other/5.png" alt="5">
                <!-- portfolio-modal-5 -->
                <div id="portfolio-modal-5" class="writingor--modal writingor--portfolio-modal-1">
                    <div class="writingor--modal__hide"></div>
                    <div class="writingor--modal__content">
                        <div class="writingor--portfolio-modal-1__main-img">
                            <h3 class="writingor--portfolio-modal-1__title">
                                Название Проекта
                            </h3>
                            <div class="writingor--portfolio-modal-1__main-img">
                                <img loading="lazy" src="<?= $dir ?>/assets/images/other/5.png" alt="5">
                            </div>
                            <p>
                                Описание проекта Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem rerum illum quia necessitatibus. Nobis, illo placeat.
                            </p>
                            <p>
                                <a href="#">https://site.ru/5</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--/ portfolio-modal-5 -->
            </div>
            <!--/ card-3 -->

            <!-- card-3 -->
            <div data-modal="#portfolio-modal-6" class="writingor--card-3">
                <img loading="lazy" src="<?= $dir ?>/assets/images/other/6.png" alt="6">
                <!-- portfolio-modal-6 -->
                <div id="portfolio-modal-6" class="writingor--modal writingor--portfolio-modal-1">
                    <div class="writingor--modal__hide"></div>
                    <div class="writingor--modal__content">
                        <h3 class="writingor--portfolio-modal-1__title">
                            Название Проекта
                        </h3>
                        <div class="writingor--portfolio-modal-1__main-img">
                            <img loading="lazy" src="<?= $dir ?>/assets/images/other/6.png" alt="6">
                        </div>
                        <p>
                            Описание проекта Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem rerum illum quia necessitatibus. Nobis, illo placeat.
                        </p>
                        <p>
                            <a href="#">https://site.ru/6</a>
                        </p>
                    </div>
                </div>
                <!--/ portfolio-modal-6 -->
            </div>
            <!--/ card-3 -->
        </div>
    </div>
    <button class="writingor--layout-5__more">Ещё</button>
    <div class="writingor--transition-to-next-1"></div>
</div>
<!--/ layout-5 (<?= str_replace('writingor--', '', $layout_id) ?>) -->