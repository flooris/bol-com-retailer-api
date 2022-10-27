<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|string getAdGroupId()
 * @method self setAdGroupId(string $adGroupId)
 * @method null|string getKeywordText()
 * @method self setKeywordText(string $keywordText)
 * @method null|string getMatchType()
 * @method null|float getBid()
 */
final class CreateKeywordRequest extends AModel
{
	public const MATCH_TYPE_EXACT = 'EXACT';
	public const MATCH_TYPE_PHRASE = 'PHRASE';

	/**
	 * The identifier of the parent ad group.
	 * @var string
	 */
	protected string $adGroupId;

	/**
	 * The text or phrase used in the keyword that caused the ad to be displayed to the user.
	 * @var string
	 */
	protected string $keywordText;

	/**
	 * The match type that relates the keyword and the search term.
	 * @var string
	 */
	protected string $matchType;

	/**
	 * The bid price. The price should always have two decimals of precision.
	 * @var float
	 */
	protected ?float $bid = null;


	public function setMatchType(string $matchType): self
	{
		$this->_checkEnumBounds($matchType, [
			"EXACT",
			"PHRASE"
		]);
		$this->matchType = $matchType;
		return $this;
	}


	public function setBid(float $bid): self
	{
		$this->_checkFloatBounds($bid, 0, );
		$this->bid = $bid;
		return $this;
	}
}
