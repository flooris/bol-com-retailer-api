<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|int getAutomaticBidDesiredAcosPercentage()
 * @method null|float getDefaultBid()
 */
final class UpdateBiddingModel extends AModel
{
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


	public function setAutomaticBidDesiredAcosPercentage(int $automaticBidDesiredAcosPercentage): self
	{
		$this->_checkIntegerBounds($automaticBidDesiredAcosPercentage, 5, 50);
		$this->automaticBidDesiredAcosPercentage = $automaticBidDesiredAcosPercentage;
		return $this;
	}


	public function setDefaultBid(float $defaultBid): self
	{
		$this->_checkFloatBounds($defaultBid, 0, );
		$this->defaultBid = $defaultBid;
		return $this;
	}
}
