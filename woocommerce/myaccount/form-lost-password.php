<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
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

defined( 'ABSPATH' ) || exit;
?>
<div class="writingor--layout-10">
	<div class="writingor--layout-10__container writingor--container">
		<? do_action('woocommerce_before_lost_password_form') ?>

		<div class="writingor--layout-10__body">
			<div class="writingor--layout-10__col-1">

				<!-- form 1 -->
				<form
					name="writingor__woo_register"
					method="post"
					class="writingor--form-1 woocommerce-ResetPassword lost_reset_password"
				>
					<h2 class="writingor--form-1__title">
						<? esc_html_e('Reset password', 'writingor') ?>
					</h2>

					<?= apply_filters(
						'woocommerce_lost_password_message',
						esc_html__('Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.', 'woocommerce')
					) ?>

					<input
						type="text"
						placeholder="<? esc_html_e('Username or email', 'woocommerce') ?>"
						class="woocommerce-Input woocommerce-Input--text input-text"
						name="user_login"
						id="user_login"
						autocomplete="username"
					>

					<?php do_action( 'woocommerce_lostpassword_form' ); ?>

					<input type="hidden" name="wc_reset_password" value="true"/>


					<?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>

					<button
						data-text-1="<?= esc_attr__('Send', 'writingor') ?>"
						data-text-2="<?= esc_attr__('Sending...', 'writingor') ?>"
						type="submit"
						class="writingor--button-4 woocommerce-Button button<? echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : '') ?>"
						value="<? esc_attr_e('Reset password', 'woocommerce') ?>"
					>
						<? esc_html_e('Reset password', 'woocommerce' ) ?>
					</button>

					<p class="writingor--form-1__response-message"></p>

				</form>
				<!--/ form 1 -->
			</div>

			<div class="writingor--layout-10__col-2">
				<!-- pass -->
			</div>
		</div>

		<? do_action('woocommerce_after_lost_password_form') ?>
	</div>
</div>
