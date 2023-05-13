<?
/**
 * Edit address form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-address.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined('ABSPATH') || exit;

$page_title = ('billing' === $load_address) ? esc_html__('Billing address', 'woocommerce') : esc_html__('Shipping address', 'woocommerce');

do_action('woocommerce_before_edit_account_address_form');
?>


<? if (!$load_address) : ?>
	<? wc_get_template( 'myaccount/my-address.php' ); ?>
<? else : ?>

	<!-- form 1 -->
	<form
		method="post"
		class="writingor--form-1"
	>
		<h3 class="writingor--form-1__title">
			<?= apply_filters('woocommerce_my_account_edit_address_title', $page_title, $load_address) ?>
		</h3>

		<? do_action("woocommerce_before_edit_address_form_{$load_address}") ?>

		<?
		foreach ($address as $key => $field) {
			// echo "<p>$key, $field</p>";
			woocommerce_form_field($key, $field, wc_get_post_data_by_key($key, $field['value']));
		}
		?>

		<? do_action( "woocommerce_after_edit_address_form_{$load_address}" ); ?>

		<input type="hidden" name="action" value="edit_address">

		<? wp_nonce_field('woocommerce-edit_address', 'woocommerce-edit-address-nonce') ?>

		<button
			data-text-1="<?= esc_attr__('Send', 'writingor') ?>"
			data-text-2="<?= esc_attr__('Sending...', 'writingor') ?>"
			type="submit"
			class="writingor--button-4 button<? echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : '' ) ?>"
			name="save_address"
			value="<? esc_attr_e('Save address', 'woocommerce') ?>"
		>
			<? esc_html_e( 'Save address', 'woocommerce' ); ?>
		</button>

		<p class="writingor--form-1__response-message"></p>

	</form>
	<!--/ form 1 -->

<? endif ?>

<? do_action( 'woocommerce_after_edit_account_address_form' ); ?>
