<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package writingor
 */

get_header();
?>
<main class="writingor--main" id="writingor--main">
    <div class="writingor--layout-9">
        <div class="writingor--layout-9__container writingor--container">
            <h1>
                <?
                printf(esc_html__('Search Results for: %s', 'writingor'), '<span>' . get_search_query() . '</span>');
                ?>    
            </h1>
            
            <?
            while (have_posts()) :
                the_post();
                get_template_part('template-parts/cards/card', '5');
            endwhile;
            ?>

            <div class="writingor--layout-9__pagination writingor--pagination-1">
                <?= paginate_links() ?>
            </div>
        </div>
    </div>
</main>
<?
get_footer();