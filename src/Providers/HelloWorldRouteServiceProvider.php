<?php
namespace HelloWorld\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\ApiRouter;
use Plenty\Plugin\Routing\Router;

/**
 * Class HelloWorldRouteServiceProvider
 * @package HelloWorld\Providers
 */
class HelloWorldRouteServiceProvider extends RouteServiceProvider
{
	/**
	 * @param Router $router
	 */
	public function map(Router $router, ApiRouter $apiRouter)
	{

		/*
		 * Api Routes
		 */
		$apiRouter->version(['v1'], ['namespace' => 'HelloWorld\Controllers', 'middleware' => 'oauth'],
			function ($apiRouter)
			{

        //Shipping settings
				$apiRouter
					->get(		'profiles/shipping_settings',
								'ShippingSettingsController@loadAll');
			});


		$router->get('hello', 'HelloWorld\Controllers\ContentController@sayHello');
	}

}
