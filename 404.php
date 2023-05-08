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
            <pre>
                <?
                if (function_exists('pll_languages_list')) {
                    $pll_languages = pll_languages_list();
                    
                    foreach ($pll_languages as $lang) {
                        // $languages[] = $lang->slug;
                        print_r($lang);
                    }
            
                }
                ?>
            </pre>
        </div>
    </div>
</main>

<? get_footer() ?>
