
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
                <a href="/" class="writingor--header-1__logo writingor--logo-1">
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
                <button onclick="showMobileMenu(event)" class="writingor--header-1__menu-toggler writingor--menu-toggler">
                    <span></span>
                    <span></span>
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
    
                    <!-- menu hide -->
                    <button class="writingor--menu-hide" onclick="hideMobileMenu(event)">
                        <span></span>
                        <span></span>
                    </button>
                    <!--/ menu hide -->
                </div>
    
                <!-- nested menu -->
                <div class="writingor--menu-1__menu">
                    <nav class="writingor--menu-1__menu-nav">
                        <ul class="writingor--menu-1__menu-list">
                            <li class="writingor--menu-1__menu-list-item">
                                <a href="#writingor--services-section" class="writingor--menu-1__menu-link writingor--anchor" onclick="hideMobileMenu(event, false)">
                                    Services
                                </a>
                            </li>
                            <li class="writingor--menu-1__menu-list-item">
                                <a href="#writingor--portfolio-section" class="writingor--menu-1__menu-link writingor--anchor" onclick="hideMobileMenu(event, false)">
                                    Portfolio
                                </a>
                            </li>
                            <li class="writingor--menu-1__menu-list-item">
                                <a href="#writingor--benefits-section" class="writingor--menu-1__menu-link writingor--anchor" onclick="hideMobileMenu(event, false)">
                                    Benefits
                                </a>
                            </li>
                            <li class="writingor--menu-1__menu-list-item">
                                <a href="#writingor--reviews-section" class="writingor--menu-1__menu-link writingor--anchor" onclick="hideMobileMenu(event, false)">
                                    Reviews
                                </a>
                            </li>
                            <li class="writingor--menu-1__menu-list-item">
                                <a href="#writingor--contacts-section" class="writingor--menu-1__menu-link writingor--anchor" onclick="hideMobileMenu(event, false)">
                                    Contacts
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--/ nested menu -->
            </div>
        </div>
        <!--/ writingor--menu-1 -->