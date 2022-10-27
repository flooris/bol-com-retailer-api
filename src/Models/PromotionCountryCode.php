<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|string getCountryCode()
 */
final class PromotionCountryCode extends AModel
{
	public const COUNTRY_CODE_NL = 'NL';
	public const COUNTRY_CODE_BE = 'BE';

	/**
	 * The country code of the country in which the promotion is active.
	 * @var string
	 */
	protected string $countryCode;


	public function setCountryCode(string $countryCode): self
	{
		$this->_checkEnumBounds($countryCode, [
			"NL",
			"BE"
		]);
		$this->countryCode = $countryCode;
		return $this;
	}
}
