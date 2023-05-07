
<!DOCTYPE html>
<html lang="<?= get_bloginfo('language') ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <? wp_head() ?>
</head>
<body class="writingor--body" id="writingor--body">

    <!-- header-1 -->
    <header class="writingor--header-1">
        <div class="writingor--header-1__container writingor--container">
            <div class="writingor--header-1__row">
                <a href="/" class="writingor--header-1__logo writingor-logo-1">
                    Writingor
                </a>
                <div class="writingor--header-1__language-switcher writingor--language-switcher" onclick="toggleLanguageSwitcherList(event)">
                    <button class="writingor--language-switcher__current">
                        <?
                        if (function_exists('pll_current_language')) {
                            echo pll_current_language();
                        }
                        ?>
                    </button>
                    <ul class="writingor--language-switcher__list">
                        <?
                        if (function_exists('pll_the_languages')) {
                            echo str_replace(' class="', ' class="writingor--language-switcher__list-item" data-class="', pll_the_languages(['show_flags' => 1, 'echo' => 0]));
                        }
                        ?>
                    </ul>
                </div>
                <div class="writingor--header-1__menu-toggler writingor--menu-toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>
    <!--/ header-1 -->