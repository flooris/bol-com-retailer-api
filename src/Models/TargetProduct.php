<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|string getTargetProductId()
 * @method self setTargetProductId(string $targetProductId)
 * @method null|string getCampaignId()
 * @method self setCampaignId(string $campaignId)
 * @method null|string getAdGroupId()
 * @method self setAdGroupId(string $adGroupId)
 * @method null|string getEan()
 * @method self setEan(string $ean)
 * @method null|string getState()
 * @method null|float getBid()
 * @method self setBid(float $bid)
 */
final class TargetProduct extends AModel
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
	 * The identifier of the target product.
	 * @var string
	 */
	protected string $targetProductId;

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
	 * The EAN associated with the target product.
	 * @var string
	 */
	protected ?string $ean = null;

	/**
	 * The current state of the target product.
	 * @var string
	 */
	protected ?string $state = null;

	/**
	 * The bid price. The price should always have two decimals of precision.
	 * @var float
	 */
	protected ?float $bid = null;


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
			"ACCOUNT_OUT_OF_BUDGET",
		]);
		$this->state = $state;
		return $this;
	}
}
