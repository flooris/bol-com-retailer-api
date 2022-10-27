<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|array getDeliveryDates()
 * @method self setDeliveryDates(array $deliveryDates)
 */
final class DeliveryDatesResponse extends AModel
{
	/**
	 * Allowed delivery dates for shipments to the bol.com warehouse in ISO 8601 format.
	 * @var array
	 */
	protected array $deliveryDates = [];
}
