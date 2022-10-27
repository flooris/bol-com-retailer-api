<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|string getAdGroupId()
 * @method self setAdGroupId(string $adGroupId)
 * @method null|string getName()
 * @method self setName(string $name)
 * @method null|string getCampaignId()
 * @method self setCampaignId(string $campaignId)
 * @method null|string getState()
 * @method null|float getDefaultBid()
 * @method self setDefaultBid(float $defaultBid)
 */
final class AdGroup extends AModel
{
	public const STATE_ENABLED = 'ENABLED';
	public const STATE_PAUSED = 'PAUSED';
	public const STATE_ARCHIVED = 'ARCHIVED';
	public const STATE_PENDING = 'PENDING';
	public const STATE_ENDED = 'ENDED';
	public const STATE_PENDING_REVIEW = 'PENDING_REVIEW';
	public const STATE_OUT_OF_BUDGET = 'OUT_OF_BUDGET';
	public const STATE_ACCOUNT_OUT_OF_BUDGET = 'ACCOUNT_OUT_OF_BUDGET';

	/**
	 * The identifier of the ad group.
	 * @var string
	 */
	protected string $adGroupId;

	/**
	 * The name of the ad group.
	 * @var string
	 */
	protected ?string $name = null;

	/**
	 * Unique identifier for the campaign.
	 * @var string
	 */
	protected ?string $campaignId = null;

	/**
	 * The current state of the ad group.
	 * @var string
	 */
	protected string $state;

	/**
	 * The default bid price. The price should always have two decimals precision.
	 * @var float
	 */
	protected ?float $defaultBid = null;


	public function setState(string $state): self
	{
		$this->_checkEnumBounds($state, [
			"ENABLED",
			"PAUSED",
			"ARCHIVED",
			"PENDING",
			"ENDED",
			"PENDING_REVIEW",
			"OUT_OF_BUDGET",
			"ACCOUNT_OUT_OF_BUDGET"
		]);
		$this->state = $state;
		return $this;
	}
}
