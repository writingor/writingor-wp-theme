<?
/**
 * Fix login, register,
 * add to cart problem
 */

// add_filter('nonce_user_logged_out', 'writingor__return_user_0', 100, 2);

// function writingor__return_user_0($uid, $action) {

//     if ($uid && $uid != 0 && $action && $action === 'caldera_forms_front') {
//        $uid = 0;
//     }
  
//     return $uid;
// }

/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package writingor
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)
 * @link https://github.com/woocommerce/woocommerce/wiki/Declaring-WooCommerce-support-in-themes
 *
 * @return void
 */
function writingor__woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 150,
			'single_image_width'    => 300,
			'product_grid'          => array(
				'default_rows'    => 3,
				'min_rows'        => 1,
				'default_columns' => 4,
				'min_columns'     => 1,
				'max_columns'     => 6,
			),
		)
	);
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'writingor__woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
// function writingor__woocommerce_scripts() {
// 	wp_enqueue_style('writingor--woocommerce-style', get_template_directory_uri() . '/woocommerce.css', array(), THEME_V);

// 	$font_path = WC()->plugin_url() . '/assets/fonts/';
// 	$inline_font = '@font-face {
// 			font-family: "star";
// 			src: url("' . $font_path . 'star.eot");
// 			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
// 				url("' . $font_path . 'star.woff") format("woff"),
// 				url("' . $font_path . 'star.ttf") format("truetype"),
// 				url("' . $font_path . 'star.svg#star") format("svg");
// 			font-weight: normal;
// 			font-style: normal;
// 		}';

// 	wp_add_inline_style('writingor--woocommerce-style', $inline_font);
// }
// add_action('wp_enqueue_scripts', 'writingor__woocommerce_scripts');

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function writingor__woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', 'writingor__woocommerce_active_body_class' );

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function writingor__woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 3,
		'columns'        => 3,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'writingor__woocommerce_related_products_args' );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'writingor__woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function writingor__woocommerce_wrapper_before() {
		?>
			<!-- <main id="primary" class="site-main"> -->
		<?php
	}
}
add_action( 'woocommerce_before_main_content', 'writingor__woocommerce_wrapper_before' );

if ( ! function_exists( 'writingor__woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function writingor__woocommerce_wrapper_after() {
		?>
			<!-- </main> -->
		<?php
	}
}
add_action( 'woocommerce_after_main_content', 'writingor__woocommerce_wrapper_after' );

/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	<?php
		if ( function_exists( 'writingor__woocommerce_header_cart' ) ) {
			writingor__woocommerce_header_cart();
		}
	?>
 */

if ( ! function_exists( 'writingor__woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function writingor__woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		writingor__woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'writingor__woocommerce_cart_link_fragment' );

if ( ! function_exists( 'writingor__woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function writingor__woocommerce_cart_link() {
		?>
		<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'writingor' ); ?>">
			<?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'writingor' ),
				WC()->cart->get_cart_contents_count()
			);
			?>
			<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> <span class="count"><?php echo esc_html( $item_count_text ); ?></span>
		</a>
		<?php
	}
}

if ( ! function_exists( 'writingor__woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function writingor__woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php writingor__woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);

				the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
}

/**
 * Change class
 * cover link single product
 */

remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);

add_action('woocommerce_before_shop_loop_item', function() {
	global $product;

	$link = apply_filters('woocommerce_loop_product_link', get_the_permalink(), $product);

	echo '<a href="' . esc_url( $link ) . '" class="writingor--card-6__cover woocommerce-LoopProduct-link woocommerce-loop-product__link">';
}, 10);

/**
 * Replace closing a tag from
 * woocommerce_after_shop_loop_item
 * 
 * to woocommerce_after_shop_loop_item_title
 */

remove_action(
	'woocommerce_after_shop_loop_item',
	'woocommerce_template_loop_product_link_close',
	5
);

add_action(
	'woocommerce_after_shop_loop_item_title',
	'woocommerce_template_loop_product_link_close',
	15
);

/**
 * Replace price from title
 */

remove_action(
	'woocommerce_after_shop_loop_item_title',
	'woocommerce_template_loop_price',
	5
);

add_action(
	'woocommerce_shop_loop_item_title',
	'woocommerce_template_loop_price',
	15
);

/**
 * Change loop product title
 */

remove_action(
	'woocommerce_shop_loop_item_title',
	'woocommerce_template_loop_product_title',
	10
);

add_action(
	'woocommerce_shop_loop_item_title',
 	function () {
		// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo '<h2 class="' . esc_attr(
			apply_filters(
				'woocommerce_product_loop_title_classes',
				'writingor--card-6__title woocommerce-loop-product__title'
				)
			) . '">' . get_the_title() . '</h2>';
 	},
	9
);

/**
 * Add woocommerce
 * form checkbox
 */
// add_action('woocommerce_register_form', 'writingor__add_registration_privacy_policy', 11);
   
// function writingor__add_registration_privacy_policy() {
// 	echo '<p class="writingor--form-1__agreement">';

// 	woocommerce_form_field('privacy_policy_reg', [
// 		'type'          => 'checkbox',
// 		'class'         => ['form-row privacy'],
// 		'label_class'   => ['writingor--checkbox-1 woocommerce-form__label woocommerce-form__label-for-checkbox checkbox'],
// 		'input_class'   => ['woocommerce-form__input woocommerce-form__input-checkbox input-checkbox'],
// 		'required'      => true,
// 		'label'         => esc_html__('I accept agreement', 'writingor')
// 	]);

// 	echo '</p>';
// }
	
/**
 * Show errors
 */

// add_filter('woocommerce_registration_errors', 'writingor__validate_privacy_registration', 10, 3);

// function writingor__validate_privacy_registration($errors, $username, $email) {

// 	if (!is_checkout() ) {

// 		if (!(int) isset($_POST['privacy_policy_reg'])) {
// 			$errors->add('privacy_policy_reg_error', __( 'Privacy Policy consent is required!', 'woocommerce'));
// 		}
// 	}
// 	return $errors;
// }

/**
 * Privacy policy text change
 */

remove_action(
	'woocommerce_register_form',
	'wc_registration_privacy_policy_text',
	20
);

add_action(
	'woocommerce_register_form_end',
 	function () {
		?>
		<p class="writingor--form-1__agreement">
            <?= esc_html__('By submitting the form you agree to', 'writingor') ?>
            <a href="/privacy-policy/" target="_blank" rel="noreferrer noopener">
                <?= esc_html__('the rules for the processing of personal data', 'writingor') ?>
            </a>
            .
        </p>
		<?
 	},
	1
);

/**
 * Change woocommerce
 * all notices
 * on pages
 */

function writingor__woocommerce_output_all_notices() {
	echo "<div class=\"writingor--notices-1 woocommerce-notices-wrapper\">";
	wc_print_notices();
	echo "</div>";
}

// add_filter('woocommerce_output_all_notices', 'writingor__woocommerce_output_all_notices', 1, 0);

// login page
remove_action('woocommerce_before_customer_login_form', 'woocommerce_output_all_notices', 10);

add_action(
	'woocommerce_before_customer_login_form', 
	'writingor__woocommerce_output_all_notices',
	10
);

// account page
remove_action('woocommerce_account_content', 'woocommerce_output_all_notices', 5);

add_action(
	'woocommerce_account_content', 
	'writingor__woocommerce_output_all_notices',
	5
);

// override_function(
// 	'',
// 	'',
// 	'echo "<div class=\"writingor--notices-1 woocommerce-notices-wrapper\">";wc_print_notices();echo "</div>";'
// );

// runkit_function_redefine(
// 	'woocommerce_output_all_notices',
// 	'',
// 	'echo "<div class=\"writingor--notices-1 woocommerce-notices-wrapper\">";wc_print_notices();echo "</div>";'
// );

/**
 * Rewrite wc inputs html
 */

// text
add_filter('woocommerce_form_field_text', 'writingor__woocommerce_form_field_text', 10, 4);

function writingor__woocommerce_form_field_text($field, $key, $args, $value) {
	$field = '';

	// foreach ($args as $a_key => $a_value) {
	// 	$field .= "<p>ARGS: Key: $a_key; Value: $a_value</p>";
	// }
	
	$field .= '<input type="text" placeholder="'. esc_attr($args['label']) .'" value="' . esc_attr($value) . '" name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '">';
	
	return $field;
}

// tel
add_filter('woocommerce_form_field_tel', 'writingor__woocommerce_form_field_tel', 10, 4);

function writingor__woocommerce_form_field_tel($field, $key, $args, $value) {
	$field = '';
	
	$field .= '<input type="tel" placeholder="'. esc_attr($args['label']) .'" value="' . esc_attr($value) . '" name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '">';
	
	return $field;
}

// email
add_filter('woocommerce_form_field_email', 'writingor__woocommerce_form_field_email', 10, 4);

function writingor__woocommerce_form_field_email($field, $key, $args, $value) {
	$field = '';
	
	$field .= '<input type="email" placeholder="'. esc_attr($args['label']) .'" value="' . esc_attr($value) . '" name="' . esc_attr($key) . '" id="' . esc_attr($args['id']) . '">';
	
	return $field;
}


// add_filter('woocommerce_form_field_radio', 'writingor__woocommerce_form_field_radio', 10, 4);

// function writingor__woocommerce_form_field_radio($field, $key, $args, $value) {

// 	if (!empty( $args['options'])) {
		
// 		$field = '<div><ul>';
		
// 		foreach ( $args['options'] as $option_key => $option_text ) {
// 			$field .= '<li>';
// 			$field .= '<input type="radio" value="' . esc_attr( $option_key ) . '" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '_' . esc_attr( $option_key ) . '" />';
// 			$field .= '<label>' . esc_html( $option_text ) . '</label>';
// 			$field .= '</li>';
// 		}
		
// 		$field .= '</ul></div>';
// 	}
    
//     return $field;
// }


/**
 * WC pagination
 */

add_filter('woocommerce_breadcrumb_defaults', function() {
	return [
		'delimeter' => '',
		'wrap_before' => '<nav class="writingor--breadcrumb woocommerce-pagination"><ul class="writingor--breadcrumb__list">',
		'wrap_after' => '</ul></nav>',
		'before' => '<li class="writingor--breadcrumb__list-item">',
		'after' => '</li>',
		'home' => __('Main', 'writingor')
	];
});