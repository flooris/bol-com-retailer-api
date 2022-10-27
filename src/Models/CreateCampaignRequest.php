<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|string getName()
 * @method self setName(string $name)
 * @method null|string getStartDate()
 * @method self setStartDate(string $startDate)
 * @method null|string getEndDate()
 * @method self setEndDate(string $endDate)
 * @method null|string getState()
 * @method null|string getTargetingType()
 * @method null|float getDailyBudget()
 * @method null|float getTotalBudget()
 * @method null|array getCountries()
 * @method null|CreateBiddingModel getBidding()
 * @method self setBidding(CreateBiddingModel $bidding)
 */
final class CreateCampaignRequest extends AModel
{
	public const STATE_ENABLED = 'ENABLED';
	public const STATE_PAUSED = 'PAUSED';
	public const STATE_ARCHIVED = 'ARCHIVED';
	public const TARGETING_TYPE_AUTO = 'AUTO';
	public const TARGETING_TYPE_MANUAL = 'MANUAL';

	/**
	 * The name of the campaign.
	 * @var string
	 */
	protected string $name;

	/**
	 * The start date of the campaign. Must be a current or future date and will always be one full day.
	 * @var string
	 */
	protected string $startDate;

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
	protected string $state;

	/**
	 * The type of keyword targeting for the campaign.
	 * @var string
	 */
	protected string $targetingType;

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

	/** @var CampaignCountry[] */
	protected array $countries = [];
	protected CreateBiddingModel $bidding;


	public function setState(string $state): self
	{
		$this->_checkEnumBounds($state, [
			"ENABLED",
			"PAUSED",
			"ARCHIVED"
		]);
		$this->state = $state;
		return $this;
	}


	public function setTargetingType(string $targetingType): self
	{
		$this->_checkEnumBounds($targetingType, [
			"AUTO",
			"MANUAL"
		]);
		$this->targetingType = $targetingType;
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


	public function setCountries(array $countries): self
	{
		$this->_checkIfPureArray($countries, CampaignCountry::class);
		$this->_checkArrayBounds($countries, 1, 2147483647);
		$this->countries = $countries;
		return $this;
	}
}
