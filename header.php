
<!DOCTYPE html>
<html lang="<?= get_bloginfo('language') ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <? wp_head() ?>
</head>
<body class="<? body_class() ?> writingor--body" id="writingor--body">
    <!-- preloader -->
    <div class="writingor--preloader">
        <span class="writingor--preloader__square writingor--preloader__square_first"></span>
        <span class="writingor--preloader__square writingor--preloader__square_second"></span>
        <span class="writingor--preloader__square writingor--preloader__square_third"></span>
    </div>
    <!--/ preloader -->
    <?
    $current_lang_slug = '';

    if (function_exists('pll_current_language')) {
        $current_lang_slug = pll_current_language();
    }

    $current_home_url = '/';

    if ($current_lang_slug !== 'en') {
        $current_home_url .= "$current_lang_slug/";
    }
    ?>
    <!-- header-1 -->
    <header class="writingor--header-1">
        <div class="writingor--header-1__container writingor--container">
            <div class="writingor--header-1__row">
                <a href="<?= esc_url($current_home_url) ?>" class="writingor--header-1__logo writingor--logo-1">
                    <?= esc_html__('Writingor', 'writingor') ?>
                </a>
                <div class="writingor--header-1__language-switcher writingor--language-switcher" onclick="toggleLanguageSwitcherList(event)">
                    <button class="writingor--language-switcher__current">
                        <?= $current_lang_slug ?>
                    </button>
                    <ul class="writingor--language-switcher__list">
                        <?
                        if (function_exists('pll_the_languages')) {
                            echo str_replace(' class="', ' class="writingor--language-switcher__list-item" data-class="', pll_the_languages(['show_flags' => 1, 'echo' => 0]));
                        }
                        ?>
                    </ul>
                </div>
                <button onclick="toggleMobileMenu(event)" class="writingor--header-1__menu-toggler writingor--menu-toggler">
                    <span></span>
                </button>
            </div>
        </div>
    </header>
    <!--/ header-1 -->

    <!-- writingor--menu-1 -->
    <div class="writingor--menu-1">
            <div class="writingor--menu-1__html-overlay" onclick="hideMobileMenu(event)"></div>
            <div class="writingor--menu-1__body">
                <div class="writingor--menu-1__header">
                    <button onclick="toggleMobileMenu(event)" class="writingor--menu-1__hide writingor--menu-toggler">
                        <span></span>
                    </button>
                </div>
    
                <!-- nested menu -->
                <div class="writingor--menu-1__menu">
                    <nav class="writingor--menu-1__menu-nav">
                        <?
                        wp_nav_menu([
                            'theme_location'  => 'writingor--header-menu',
                            'container'       => false,
                            'menu_class'      => false,
                            'menu_id'         => false,
                            'echo'            => true,
                            'items_wrap'      => '<ul class="writingor--menu-1__menu-list">%3$s</ul>',
                            'walker' => new Writingor__Header_Menu_Walker(),
                            'show_carets' => true
                        ]);
                        ?>
                    </nav>
                </div>
                <!--/ nested menu -->
            </div>
        </div>
        <!--/ writingor--menu-1 -->