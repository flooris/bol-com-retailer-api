<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|string getEan()
 * @method self setEan(string $ean)
 */
final class Assortment extends AModel
{
	/**
	 * The EAN associated with the target product.
	 * @var string
	 */
	protected string $ean;
}
