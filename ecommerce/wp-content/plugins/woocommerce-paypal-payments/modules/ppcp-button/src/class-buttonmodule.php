<?php
/**
 * The button module.
 *
 * @package WooCommerce\PayPalCommerce\Button
 */

declare(strict_types=1);

namespace WooCommerce\PayPalCommerce\Button;

use Dhii\Container\ServiceProvider;
use Dhii\Modular\Module\ModuleInterface;
use WooCommerce\PayPalCommerce\Button\Assets\SmartButtonInterface;
use WooCommerce\PayPalCommerce\Button\Endpoint\ApproveOrderEndpoint;
use WooCommerce\PayPalCommerce\Button\Endpoint\ChangeCartEndpoint;
use WooCommerce\PayPalCommerce\Button\Endpoint\CreateOrderEndpoint;
use WooCommerce\PayPalCommerce\Button\Endpoint\DataClientIdEndpoint;
use WooCommerce\PayPalCommerce\Button\Helper\EarlyOrderHandler;
use Interop\Container\ServiceProviderInterface;
use Psr\Container\ContainerInterface;

/**
 * Class ButtonModule
 */
class ButtonModule implements ModuleInterface {


	/**
	 * Sets up the module.
	 *
	 * @return ServiceProviderInterface
	 */
	public function setup(): ServiceProviderInterface {
		return new ServiceProvider(
			require __DIR__ . '/../services.php',
			require __DIR__ . '/../extensions.php'
		);
	}

	/**
	 * Runs the module.
	 *
	 * @param ContainerInterface|null $container The Container.
	 */
	public function run( ContainerInterface $container ): void {

		add_action(
			'wp',
			static function () use ( $container ) {
				if ( is_admin() ) {
					return;
				}
				$smart_button = $container->get( 'button.smart-button' );
				/**
				 * The Smart Button.
				 *
				 * @var SmartButtonInterface $smart_button
				 */
				$smart_button->render_wrapper();
			}
		);
		add_action(
			'wp_enqueue_scripts',
			static function () use ( $container ) {

				$smart_button = $container->get( 'button.smart-button' );
				/**
				 * The Smart Button.
				 *
				 * @var SmartButtonInterface $smart_button
				 */
				$smart_button->enqueue();
			}
		);

		add_filter(
			'woocommerce_create_order',
			static function ( $value ) use ( $container ) {
				$early_order_handler = $container->get( 'button.helper.early-order-handler' );
				if ( ! is_null( $value ) ) {
					$value = (int) $value;
				}
				/**
				 * The Early Order Handler
				 *
				 * @var EarlyOrderHandler $early_order_handler
				 */
				return $early_order_handler->determine_wc_order_id( $value );
			}
		);

		$this->register_ajax_endpoints( $container );
	}

	/**
	 * Registers the Ajax Endpoints.
	 *
	 * @param ContainerInterface $container The Container.
	 */
	private function register_ajax_endpoints( ContainerInterface $container ) {
		add_action(
			'wc_ajax_' . DataClientIdEndpoint::ENDPOINT,
			static function () use ( $container ) {
				$endpoint = $container->get( 'button.endpoint.data-client-id' );
				/**
				 * The Data Client ID Endpoint.
				 *
				 * @var DataClientIdEndpoint $endpoint
				 */
				$endpoint->handle_request();
			}
		);

		add_action(
			'wc_ajax_' . ChangeCartEndpoint::ENDPOINT,
			static function () use ( $container ) {
				$endpoint = $container->get( 'button.endpoint.change-cart' );
				/**
				 * The Change Cart Endpoint.
				 *
				 * @var ChangeCartEndpoint $endpoint
				 */
				$endpoint->handle_request();
			}
		);

		add_action(
			'wc_ajax_' . ApproveOrderEndpoint::ENDPOINT,
			static function () use ( $container ) {
				$endpoint = $container->get( 'button.endpoint.approve-order' );
				/**
				 * The Approve Order Endpoint.
				 *
				 * @var ApproveOrderEndpoint $endpoint
				 */
				$endpoint->handle_request();
			}
		);

		add_action(
			'wc_ajax_' . CreateOrderEndpoint::ENDPOINT,
			static function () use ( $container ) {
				$endpoint = $container->get( 'button.endpoint.create-order' );
				/**
				 * The Create Order Endpoint.
				 *
				 * @var CreateOrderEndpoint $endpoint
				 */
				$endpoint->handle_request();
			}
		);
	}

	/**
	 * Returns the key for the module.
	 *
	 * @return string|void
	 */
	public function getKey() {
	}
}
