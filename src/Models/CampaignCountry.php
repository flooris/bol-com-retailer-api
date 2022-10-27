<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|string getCountryCode()
 */
final class CampaignCountry extends AModel
{
	public const COUNTRY_CODE_NL = 'NL';
	public const COUNTRY_CODE_BE = 'BE';

	/**
	 * The target country in which your ads need to be shown.
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
