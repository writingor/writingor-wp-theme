<? get_header() ?>

<main class="writingor--main" id="writingor--main">
    <div class="writingor--404">
        <div class="writingor--container">
            <br>
            <br>
            <br>
            <p><b><a href="/">< Вернуться на главную</a></b></p>
            <h1>Страница не найдена!!!</h1>
            <p>404</p>
            <br>
            <br>
            <h2>Testing wp menu arr</h2>
            <pre>
                <?
                wp_nav_menu([
                    'theme_location'  => 'writingor--header-menu',
                    'container'       => false,
                    'menu_class'      => false,
                    'menu_id'         => false,
                    'echo'            => true,
                    'items_wrap'      => '<ul>%3$s</ul>',
                ]);
                // print_r(writingor__get_menu_array('writingor--header-menu'));
                ?>
            </pre>
        </div>
    </div>
</main>

<? get_footer() ?>
