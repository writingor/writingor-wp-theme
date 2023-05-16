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
		<input
			class="writingor--dropdown-1__input"
			type="text"
			name="orderby"
			value=""
			placeholder="Все отделения"
			onkeydown="return false;"
			onclick="return false;"
			aria-label="<? esc_attr_e('Shop order', 'woocommerce') ?>"
		>
		<img
			class="writingor--dropdown-1__arrow"
			src="/local/templates/perinatal-center/asset/img/icon/arr-11-b.png"
			alt="arrow"
		>
		<ul class="writingor--dropdown-1__list">
			<? foreach ($catalog_orderby_options as $id => $name) : ?>
				<li
					class="writingor--dropdown-1__list-item"
					data-value="<?= esc_attr($id) ?>"
					<? selected($orderby, $id) ?>
				>
					<?= esc_html($name) ?>
				</li>
			<? endforeach ?>
		</ul>
	</div>

	<input type="hidden" name="paged" value="1" />
	<?php wc_query_string_form_fields( null, array( 'orderby', 'submit', 'paged', 'product-page' ) ); ?>
</form>
