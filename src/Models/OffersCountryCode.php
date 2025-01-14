<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|string getCountryCode()
 * @method self setCountryCode(string $countryCode)
 */
final class OffersCountryCode extends AModel
{
	/**
	 * Countries in which this offer is currently on sale in the webshop, in ISO-3166-1 format.
	 * @var string
	 */
	protected string $countryCode;
}
