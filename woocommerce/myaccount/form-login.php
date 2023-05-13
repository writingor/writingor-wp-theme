<?
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>
<div class="writingor--layout-10">
	<div class="writingor--layout-10__container writingor--container">

		<? do_action('woocommerce_before_customer_login_form') ?>

		<? if ('yes' === get_option('woocommerce_enable_myaccount_registration')) : ?>

		<div class="writingor--layout-10__body u-columns col2-set" id="customer_login">

			<div class="writingor--layout-10__col-1 u-column1 col-1">

		<? endif; ?>

				<!-- form 1 -->
				<form
					name="writingor__woo_register"
					method="post"
					class="writingor--form-1 woocommerce-form woocommerce-form-login login" <? do_action('woocommerce_register_form_tag') ?>
				>
					<h2 class="writingor--form-1__title">
						<? esc_html_e('Login', 'woocommerce') ?>
					</h2>

					<? do_action('woocommerce_login_form_start') ?>

					<input
						type="text"
						placeholder="<? esc_html_e('Username or email address', 'woocommerce') ?>"
						class="woocommerce-Input woocommerce-Input--text input-text"
						name="username"
						id="username"
						autocomplete="username"
						value="<?= (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : '' ?>"
					>

					<input
						type="password"
						placeholder="<? esc_html_e('Password', 'woocommerce') ?>"
						class="woocommerce-Input woocommerce-Input--text input-text"
						name="password"
						id="password"
						autocomplete="current-password"
					>

					<? do_action('woocommerce_login_form') ?>

					<label class="writingor--checkbox-1 woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
						<input
							class="woocommerce-form__input woocommerce-form__input-checkbox"
							name="rememberme"
							type="checkbox"
							id="rememberme"
							value="forever"
						>
						<span>
							<? esc_html_e('Remember me', 'woocommerce') ?>
						</span>
					</label>

					<? wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce') ?>

					<button
						data-text-1="<?= esc_attr__('Send', 'writingor') ?>"
						data-text-2="<?= esc_attr__('Sending...', 'writingor') ?>"
						type="submit"
						class="writingor--button-4 woocommerce-button button woocommerce-form-login__submit<?= esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : '') ?>"
						name="login"
						value="<? esc_attr_e('Log in', 'woocommerce') ?>"
					>
						<? esc_html_e('Log in', 'woocommerce'); ?>
					</button>

					<p class="writingor--form-1__response-message"></p>

					<a
						class="writingor--button-3"
						href="<? echo esc_url(wp_lostpassword_url()) ?>"
					>
						<? esc_html_e('Lost your password?', 'woocommerce') ?>
					</a>

					<? do_action('woocommerce_login_form_end'); ?>

				</form>
				<!--/ form 1 -->

		<? if ('yes' === get_option('woocommerce_enable_myaccount_registration')) : ?>
			</div>

			<div class="writingor--layout-10__col-2 u-column2 col-2">
				<!-- form 1 -->
				<form name="writingor__woo_register" method="post" class="writingor--form-1 woocommerce-form woocommerce-form-register register" <? do_action('woocommerce_register_form_tag'); ?>>
					<h2 class="writingor--form-1__title">
						<? esc_html_e('Register', 'woocommerce'); ?>
					</h2>

					<? do_action('woocommerce_register_form_start'); ?>

					<? if ('no' === get_option('woocommerce_registration_generate_username')) : ?>
						<input
							type="text"
							placeholder="<? esc_html_e('Username', 'woocommerce') ?>"
							class="woocommerce-Input woocommerce-Input--text input-text"
							name="username"
							id="reg_username"
							autocomplete="username"
							value="<?= (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : '' ?>"
						>
					<? endif ?>

					<input
						type="email"
						placeholder="<?= esc_html_e('Email address', 'woocommerce') ?>"
						class="woocommerce-Input woocommerce-Input--text input-text"
						name="email"
						id="reg_email"
						autocomplete="email"
						value="<?= (!empty($_POST['email'])) ? esc_attr(wp_unslash($_POST['email'])) : '' ?>"
					>

					<? if ('no' === get_option('woocommerce_registration_generate_password')) : ?>
						<input
							type="password"
							placeholder="<? esc_html_e('Password', 'woocommerce') ?>"
							class="woocommerce-Input woocommerce-Input--text input-text"
							name="password" 
							d="reg_password"
							autocomplete="new-password"
						>
					<? else : ?>
						<p><? esc_html_e('A link to set a new password will be sent to your email address.', 'woocommerce') ?></p>
					<? endif ?>

					<!-- pivacy policy removed -->
					<? do_action('woocommerce_register_form') ?>

					<? wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce') ?>
						
					<button
						data-text-1="<?= esc_attr__('Send', 'writingor') ?>"
						data-text-2="<?= esc_attr__('Sending...', 'writingor') ?>"
						type="submit"
						class="writingor--button-4 woocommerce-Button woocommerce-button button<?= esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : '')?> woocommerce-form-register__submit"
						name="register"
						value="<? esc_attr_e('Register', 'woocommerce') ?>"
					>
						<? esc_html_e('Register', 'woocommerce') ?>
					</button>


					<p class="writingor--form-1__response-message"></p>

					<!-- policy will be here -->

					<? do_action('woocommerce_register_form_end') ?>

				</form>
				<!--/ form 1 -->

			</div>
		</div>
		<? endif; ?>
		<? do_action('woocommerce_after_customer_login_form'); ?>
	</div>
</div>