<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|string getKeywordId()
 * @method self setKeywordId(string $keywordId)
 * @method null|string getCampaignId()
 * @method self setCampaignId(string $campaignId)
 * @method null|string getAdGroupId()
 * @method self setAdGroupId(string $adGroupId)
 * @method null|string getState()
 * @method null|string getKeywordText()
 * @method self setKeywordText(string $keywordText)
 * @method null|string getMatchType()
 * @method null|float getBid()
 * @method self setBid(float $bid)
 */
final class Keyword extends \HarmSmits\BolComClient\Models\AModel
{
	public const STATE_ENABLED = 'ENABLED';
	public const STATE_PAUSED = 'PAUSED';
	public const MATCH_TYPE_EXACT = 'EXACT';
	public const MATCH_TYPE_PHRASE = 'PHRASE';

	/**
	 * The identifier of the keyword.
	 * @var string
	 */
	protected string $keywordId;

	/**
	 * The identifier of the parent campaign.
	 * @var string
	 */
	protected string $campaignId;

	/**
	 * The identifier of the parent ad group.
	 * @var string
	 */
	protected string $adGroupId;

	/**
	 * The current state of the keyword.
	 * @var string
	 */
	protected ?string $state = null;

	/**
	 * The text or phrase used in the keyword that caused the ad to be displayed to the user.
	 * @var string
	 */
	protected ?string $keywordText = null;

	/**
	 * The match type that relates the keyword and the search term.
	 * @var string
	 */
	protected ?string $matchType = null;

	/**
	 * The bid price. The price should always have two decimals of precision.
	 * @var float
	 */
	protected ?float $bid = null;


	public function setState(string $state): self
	{
		$this->_checkEnumBounds($state, [
			"ENABLED",
			"PAUSED"
		]);
		$this->state = $state;
		return $this;
	}


	public function setMatchType(string $matchType): self
	{
		$this->_checkEnumBounds($matchType, [
			"EXACT",
			"PHRASE"
		]);
		$this->matchType = $matchType;
		return $this;
	}
}
