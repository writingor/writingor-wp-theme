<?php
/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.6.0
 */

if (!defined('ABSPATH')) {
	exit;
}

?>
<form class="woocommerce-ordering" method="get">

	<div class="writingor--dropdown-1">
		<div class="writingor--dropdown-1__arrow"></div>
		<!-- <img
			class="writingor--dropdown-1__arrow"
			src=""
			alt="arrow"
		> -->
		<ul class="writingor--dropdown-1__list">
			<?
			$i = 0;
			$default_value = $_GET['orderby'];
			$default_name = '';

			foreach ($catalog_orderby_options as $id => $name) :

				if (!$default_value && $i === 0) {
					$default_value = $id;
				}
				
				if ($default_value === $id) {
					$default_name = $name;
				}
			?>
				<li
					class="writingor--dropdown-1__list-item"
					data-value="<?= esc_attr($id) ?>"
					<? selected($orderby, $id) ?>
				>
					<?= esc_html($name) ?>
				</li>
			<?
				$i++;
			endforeach;
			?>
		</ul>
		<input
			class="writingor--dropdown-1__input"
			type="hidden"
			name="orderby"
			value="<?= esc_attr($default_value) ?>"
			placeholder="<?= esc_attr($default_name) ?>"
			onkeydown="return false;"
			onclick="return false;"
			aria-label="<? esc_attr_e('Shop order', 'woocommerce') ?>"
		>
		<span class="writingor--dropdown-1__current-value">
			<?= esc_attr($default_name) ?>
		</span>
	</div>

	<input type="hidden" name="paged" value="1" />
	<?php wc_query_string_form_fields( null, array( 'orderby', 'submit', 'paged', 'product-page' ) ); ?>
</form>
