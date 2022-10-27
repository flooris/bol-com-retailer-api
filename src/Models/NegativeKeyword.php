<?php

namespace HarmSmits\BolComClient\Models;

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
 */
final class NegativeKeyword extends AModel
{
	public const STATE_ENABLED = 'ENABLED';
	public const STATE_PAUSED = 'PAUSED';
	public const MATCH_TYPE_EXACT = 'EXACT';
	public const MATCH_TYPE_PHRASE = 'PHRASE';

	/**
	 * The identifier of the negative keyword.
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
	 * The state of the negative keyword.
	 * @var string
	 */
	protected ?string $state = null;

	/**
	 * The text or phrase used in the negative keyword that caused the ad not to be displayed to the user.
	 * @var string
	 */
	protected ?string $keywordText = null;

	/**
	 * The match type that relates the negative keyword and the search term.
	 * @var string
	 */
	protected ?string $matchType = null;


	public function setState(string $state): self
	{
		$this->_checkEnumBounds($state, [
			"ENABLED",
			"PAUSED",
		]);
		$this->state = $state;
		return $this;
	}


	public function setMatchType(string $matchType): self
	{
		$this->_checkEnumBounds($matchType, [
			"EXACT",
			"PHRASE",
		]);
		$this->matchType = $matchType;
		return $this;
	}
}
