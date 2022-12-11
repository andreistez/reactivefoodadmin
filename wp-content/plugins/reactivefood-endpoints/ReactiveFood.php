<?php

namespace Food;

use WP_REST_Request;

class ReactiveFood
{
	public static function getInstance(): ReactiveFood
	{
		return new static();
	}

	public function __construct()
	{
		add_action( 'rest_api_init', [ $this, 'registerCustomRoutes' ] );
	}

	/**
	 * Register all custom routes.
	 *
	 * @return void
	 */
	public function registerCustomRoutes(): void
	{
		register_rest_route( '/jwt-auth/v1', '/food', [
			[
				'methods'				=> 'GET',
				'callback'				=> [ $this, 'getFoodCB' ],
				'permission_callback'	=> 'is_user_logged_in',
				/*'args'					=> [
					'arg_str'	=> [
						'type'		=> 'string',
						'required'	=> true
					],
					'arg_int'	=> [
						'type'		=> 'integer',
						'default'	=> 10
					]
				]*/
			]
		] );
	}

	public function getFoodCB( WP_REST_Request $request ): array
	{
		return ['azaza'];
	}
}

