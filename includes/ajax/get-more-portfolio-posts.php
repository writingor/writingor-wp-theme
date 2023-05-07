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

            get_template_part(
                'template-parts/cards/card',
                '3',
                [
                    'index' => $index,
                    'visible' => true,
                    'add_onclick' => true
                ]
            );
            
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
