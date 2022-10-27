<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|string getCountryCode()
 * @method null|int getRelevanceScore()
 * @method self setRelevanceScore(int $relevanceScore)
 */
final class RelevanceScore extends \HarmSmits\BolComClient\Models\AModel
{
	public const COUNTRY_CODE_NL = 'NL';
	public const COUNTRY_CODE_BE = 'BE';

	/**
	 * The country for which the relevance score has been calculated against.
	 * @var string
	 */
	protected ?string $countryCode = null;

	/**
	 * The calculated relevance score for the product.
	 * @var int
	 */
	protected ?int $relevanceScore = null;


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
