<?
/**
 * Benefits
 * loop
 */

add_shortcode('writingor__benefits_loop', 'writingor__benefits_loop');
function writingor__benefits_loop() {
    $output = '';

    $args = [
        'post_type' => 'benefits',
        'posts_per_page' => 3,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    ];
    $loop = new WP_Query($args);

    ob_start();

    if($loop->have_posts()) :
        while($loop->have_posts()) :
        $loop->the_post(); 
            ?>
            <!-- card-1 -->
            <div class="writingor--card-1">
                <h3 class="writingor--card-1__title">
                    <?= the_title() ?>
                </h3>
                <?= the_content() ?>
            </div>
            <!--/ card-1 -->
            <?
        endwhile;
        wp_reset_postdata();
    endif;
    
    $output .= ob_get_contents();
    ob_end_clean();

    return $output;
}

/**
 * Services
 * loop
 */

add_shortcode('writingor__services_loop', 'writingor__services_loop');
function writingor__services_loop() {
    $output = '';

    $args = [
        'post_type' => 'services',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    ];
    $loop = new WP_Query($args);
    $index = 1;

    ob_start();

    if($loop->have_posts()) :
        while($loop->have_posts()) :
        $loop->the_post(); 
            ?>
            <!-- card-2 (№<?= $index ?>) -->
            <div class="writingor--card-2">
                <div class="writingor--card-2__icon">
                    <img src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>" alt="icon">
                </div>
                <div class="writingor--card-2__body">
                    <div class="writingor--card-2__main">
                        <h3 class="writingor--card-2__title">
                            <? the_title() ?>
                        </h3>
                        <p>
                            <?= esc_html(get_the_excerpt()) ?>
                        </p>
                    </div>
                    <div class="writingor--card-2__footer">
                        <div class="writingor--card-2__terms">
                            <div class="writingor--card-2__price">
                                <?= get_post_meta(get_the_ID(), 'writingor__price', true) ?>
                            </div>
                            <div class="writingor--card-2__production-time">                             
                                <?= get_post_meta(get_the_ID(), 'writingor__production_time', true) ?>
                            </div>
                        </div>
                        <a href="#get-service-modal-<?= $index ?>" data-modal class="writingor--button-1">
                            <?= esc_html__('Get', 'writingor') ?>
                        </a>
                    </div>
                </div>
            </div>
            <!--/ card-2 (№<?= $index ?>) -->
            <!-- get-service-modal-<?= $index ?> -->
            <div id="get-service-modal-<?= $index ?>" class="writingor--modal">
                <div class="writingor--modal__hide"></div>
                <div class="writingor--modal__content">
                    <?= do_shortcode('[writingor__form_1 title="'.get_the_title().'"]') ?>
                </div>
            </div>
            <!--/ get-service-modal-<?= $index ?> -->
            <?
            $index++;
        endwhile;
        wp_reset_postdata();
    endif;
    
    $output .= ob_get_contents();
    ob_end_clean();

    return $output;
}

/**
 * Portfolio
 * loop
 */

add_shortcode('writingor__portfolio_loop', 'writingor__portfolio_loop');
function writingor__portfolio_loop() {
    $output = '';

    $args = [
        'post_type' => 'portfolio',
        'posts_per_page' => 6,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    ];
    $loop = new WP_Query($args);
    $index = 1;

    ob_start();

    if($loop->have_posts()) :
        while($loop->have_posts()) :
            $loop->the_post(); 
            
            get_template_part(
                'template-parts/cards/card',
                '3',
                [
                    'index' => $index,
                    'visible' => false,
                    'add_onclick' => false
                ]
            );

            $index++;
        endwhile;
        wp_reset_postdata();
    endif;
    
    $output .= ob_get_contents();
    ob_end_clean();

    return $output;
}

/**
 * Reviews
 * loop
 */

add_shortcode('writingor__reviews_loop', 'writingor__reviews_loop');
function writingor__reviews_loop() {
    $output = '';

    $args = [
        'post_type' => 'reviews',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    ];
    $loop = new WP_Query($args);
    $index = 1;

    ob_start();

    if($loop->have_posts()) :
        while($loop->have_posts()) :
        $loop->the_post(); 
            ?>
            <!-- card-4 (№ <?= $index ?>) -->
            <a rel="noreferrer noopener" target="_blank" href="<?= esc_url(get_post_meta(get_the_ID(), 'writingor__review_link', true)) ?>" class="swiper-slide writingor--card-4">
                <h3 class="writingor--card-4__title">
                    <? the_title() ?>
                    <img src="<?= get_template_directory_uri() ?>/assets/images/icon/arrow-1.svg" alt="link icon" class="writingor--card-4__link-icon">
                </h3>
                <? the_content() ?>
            </a>
            <!--/ card-4 (№ <?= $index ?>) -->
            <?
            $index++;
        endwhile;
        wp_reset_postdata();
    endif;
    
    $output .= ob_get_contents();
    ob_end_clean();

    return $output;
}

/**
 * Form 1
 */

add_shortcode('writingor__form_1', 'writingor__form_1');
function writingor__form_1($props) {
    $output = '';

    ob_start();

    ?>
    <!-- form 1 -->
    <form method="post" class="writingor--form-1" action="<?= admin_url('admin-ajax.php') ?>">
        <h2 class="writingor--form-1__title">
            <?= $props['title'] ?>
        </h2>
        <?= str_replace('id="', 'data-id="', wp_nonce_field('writingor_send_contact_and_task', 'nonce', false, false)) ?>
        <input type="hidden" name="form_name" value="">
        <input type="text" name="name" placeholder="<?= esc_attr__('Firstname', 'writingor') ?>" style="display: none">
        <input type="text" name="contact" placeholder="<?= esc_attr__('Any contact', 'writingor') ?>">
        <textarea name="task" placeholder="<?= esc_attr__('Task', 'writingor') ?>"></textarea>
        <p class="writingor--form-1__response-message"></p>
        <button data-text-1="<?= esc_attr__('Send', 'writingor') ?>" data-text-2="<?= esc_attr__('Sending...', 'writingor') ?>" class="writingor--button-4"><?= esc_html__('Send', 'writingor') ?></button>
        <p class="writingor--form-1__agreement">
            <?= esc_html__('By submitting the form you agree to', 'writingor') ?>
            <a href="/privacy-policy/" target="_blank" rel="noreferrer noopener">
                <?= esc_html__('the rules for the processing of personal data', 'writingor') ?>
            </a>
            .
        </p>
    </form>
    <!--/ form 1 -->
    <?
    
    $output .= ob_get_contents();
    ob_end_clean();

    return $output;
}
