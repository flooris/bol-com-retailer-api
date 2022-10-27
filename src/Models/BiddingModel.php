<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|string getStrategy()
 * @method null|int getAutomaticBidDesiredAcosPercentage()
 * @method self setAutomaticBidDesiredAcosPercentage(int $automaticBidDesiredAcosPercentage)
 * @method null|float getDefaultBid()
 * @method self setDefaultBid(float $defaultBid)
 */
final class BiddingModel extends AModel
{
	public const STRATEGY_AUTO = 'AUTO';
	public const STRATEGY_MANUAL_BY_KEYWORD = 'MANUAL_BY_KEYWORD';
	public const STRATEGY_MANUAL_BY_PRODUCT = 'MANUAL_BY_PRODUCT';

	/**
	 * The type of strategy you will use for bidding on advertisements.
	 * @var string
	 */
	protected string $strategy;

	/**
	 * Only required when the bidding strategy is set to AUTO. When provided, the bidding strategy will attempt to reach this
	 * ACoS. The format is a number without decimals that represents a percentage.
	 * @var int
	 */
	protected ?int $automaticBidDesiredAcosPercentage = null;

	/**
	 * The default bid price. The price should always have two decimals precision.
	 * @var float
	 */
	protected ?float $defaultBid = null;


	public function setStrategy(string $strategy): self
	{
		$this->_checkEnumBounds($strategy, [
			"AUTO",
			"MANUAL_BY_KEYWORD",
			"MANUAL_BY_PRODUCT"
		]);
		$this->strategy = $strategy;
		return $this;
	}
}
