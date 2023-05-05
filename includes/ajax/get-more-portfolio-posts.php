<?
add_action('wp_ajax_get_more_portfolio_posts', 'writingor__get_more_portfolio_posts');
add_action('wp_ajax_nopriv_get_more_portfolio_posts', 'writingor__get_more_portfolio_posts');

function writingor__get_more_portfolio_posts() {

    /**
     * $nonce check
     * must be true
     */

    if (
        !isset($_POST['nonce']) 
        ||
        !wp_verify_nonce($_POST['nonce'], 'writingor--ajax-global-nonce')
        ) {
        echo json_encode([
            'nonce' => 'nonce is invalid',
        ]);

        exit;
    }

    /**
     * Paged
     */

    $paged = 1;

    if (
        !isset($_POST['paged']) 
        ||
        (int) $_POST['paged'] < 1
        ) {
        echo json_encode([
            'paged' => 'paged less than 1',
        ]);

        exit;

    } else {
        $paged = (int) $_POST['paged'];
    }

    $per_page = 6;

    $output = '';

    $args = [
        'post_type' => 'portfolio',
        'posts_per_page' => $per_page,
        'paged' => $paged + 1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    ];
    $loop = new WP_Query($args);
    $index = $paged * $per_page + 1;

    ob_start();

    if($loop->have_posts()) :
        while($loop->have_posts()) :
        $loop->the_post(); 
            ?>
            <!-- card-3 (№ <?= $index ?>) -->
            <div data-modal="#writingor--portfolio-modal-<?= $index ?>" class="writingor--card-3 writingor--visible" onclick="showModal(event.target.closest('[data-modal]'))">
                <img loading="lazy" src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>" alt="<?= esc_attr(get_the_title()) ?>">
                <!-- portfolio-modal-<?= $index ?> -->
                <div id="writingor--portfolio-modal-<?= $index ?>" class="writingor--modal writingor--portfolio-modal-1">
                    <div class="writingor--modal__hide"></div>
                    <div class="writingor--modal__content">
                        <div class="writingor--portfolio-modal-1__main-img">
                            <h3 class="writingor--portfolio-modal-1__title">
                                <? the_title() ?>
                            </h3>
                            <div class="writingor--portfolio-modal-1__main-img">
                                <img loading="lazy" src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>" alt="<?= esc_attr(get_the_title()) ?>">
                            </div>
                            <p>
                                <? the_excerpt() ?>
                            </p>
                            <p><a rel="noreferrer noopener" target="_blank" href="<?= get_post_permalink() ?>">Посмотреть вёрстку</a></p>
                        </div>
                    </div>
                </div>
                <!--/ portfolio-modal-<?= $index ?> -->
            </div>
            <!--/ card-3 (№ <?= $index ?>) -->
            <?
            $index++;
        endwhile;
        wp_reset_postdata();
    endif;
    
    $output .= ob_get_contents();
    ob_end_clean();

    echo json_encode([
        'success' => true,
        'html' => $output,
        'paged' => ++$paged
    ]);

    exit;
}
