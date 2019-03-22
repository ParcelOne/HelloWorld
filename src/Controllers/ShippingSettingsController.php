<?php

namespace HelloWorld\Controllers;


use HelloWorld\Services\ShippingSettingsService;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;

/**
 * Class ShippingSettingsController
 * @author jsternsdorff
 * @package ParcelOneShipping\Controllers
 */
class ShippingSettingsController extends Controller
{
	/**
	 * @var ShippingSettingsService
	 */
	private $settingsService;

	/**
	 * ShippingSettingsController constructor.
	 * @param ShippingSettingsService $settingsService
	 */
	public function __construct(ShippingSettingsService $settingsService)
	{
		$this->settingsService = $settingsService;
	}

	/**
	 * @return string
	 */
	public function loadAll()
	{
		$shippingSettings = $this->settingsService->loadAll();
		return json_encode($shippingSettings);
	}
}
