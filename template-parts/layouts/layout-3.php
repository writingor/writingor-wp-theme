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
<!-- layout-3 (<?= str_replace('writingor--', '', $layout_id) ?>) -->
<div <?= $layout_id_attr ?> class="writingor--layout writingor--layout-3 <?= $layout_id ?>">
    <div class="writingor--layout-3__container writingor--container">
        <div class="writingor--layout-3__header">
            <h2 class="writingor--title-1">
                Я - ЧАСТНЫЙ РАЗРАБОТЧИК
                <small>
                    И у меня много преимуществ
                </small>
            </h2>
        </div>
        <div class="writingor--layout-3__cards">
            <!-- card-1 -->
            <div class="writingor--card-1">
                <h3 class="writingor--card-1__title">
                    гибкие <br>
                    условия
                </h3>
                <p>
                    Как частный разработчик, я предлагаю более гибкие условия
                    работы и индивидуальный подход к каждому клиенту.
                </p>
                <p>
                    Готов обсуждать детали и корректировать
                    проект в соответствии с вашими потребностями.
                </p>
            </div>
            <!--/ card-1 -->
            <!-- card-1 -->
            <div class="writingor--card-1">
                <h3 class="writingor--card-1__title">
                    Высокая <br>
                    ответственность
                </h3>
                <p>
                    Работаю над проектом более тщательно,
                    так как качество работы непосредственно связано с моим именем и репутацией.
                </p>
                <p>
                    Не отвлекаюсь на другие проекты и сосредоточен на решении текущих задач.
                </p>
            </div>
            <!--/ card-1 -->
            <!-- card-1 -->
            <div class="writingor--card-1">
                <h3 class="writingor--card-1__title">
                    Лучшая <br>
                    коммуникация
                </h3>
                <p>
                    Оперативно реагирую на все вопросы и предложения.
                </p>
                <p>
                    Общение проходит напрямую со мной, что позволяет избежать ошибок
                    в трактовке задач и упростить процесс обсуждения и изменения проекта.
                </p>
            </div>
            <!--/ card-1 -->
        </div>
    </div>
    <div class="writingor--transition-to-next-1"></div>
</div>
<!--/ layout-3 (<?= str_replace('writingor--', '', $layout_id) ?>) -->