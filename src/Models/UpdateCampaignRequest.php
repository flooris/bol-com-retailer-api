<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|string getName()
 * @method self setName(string $name)
 * @method null|string getStartDate()
 * @method self setStartDate(string $startDate)
 * @method null|string getEndDate()
 * @method self setEndDate(string $endDate)
 * @method null|string getState()
 * @method null|float getDailyBudget()
 * @method null|float getTotalBudget()
 * @method null|UpdateBiddingModel getBidding()
 * @method self setBidding(UpdateBiddingModel $bidding)
 */
final class UpdateCampaignRequest extends AModel
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
	 * The name of the campaign.
	 * @var string
	 */
	protected ?string $name = null;

	/**
	 * The start date of the campaign. Must be a current or future date and will always be one full day.
	 * @var string
	 */
	protected ?string $startDate = null;

	/**
	 * The end date of the campaign. Must be a future date that is at least one day after the start date of the campaign, and
	 * will always be one full day.
	 * @var string
	 */
	protected ?string $endDate = null;

	/**
	 * The state of the campaign.
	 * @var string
	 */
	protected ?string $state = null;

	/**
	 * The maximum amount that can be spend in one day for this campaign. The amount should always have two decimals precision.
	 * @var float
	 */
	protected ?float $dailyBudget = null;

	/**
	 * The total budget that can be spend for this campaign. The amount should always have two decimals precision.
	 * @var float
	 */
	protected ?float $totalBudget = null;
	protected ?UpdateBiddingModel $bidding = null;


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


	public function setDailyBudget(float $dailyBudget): self
	{
		$this->_checkFloatBounds($dailyBudget, 0, 100000);
		$this->dailyBudget = $dailyBudget;
		return $this;
	}


	public function setTotalBudget(float $totalBudget): self
	{
		$this->_checkFloatBounds($totalBudget, 0, 9.2233720368548E+18);
		$this->totalBudget = $totalBudget;
		return $this;
	}
}
