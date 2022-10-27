<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|string getName()
 * @method self setName(string $name)
 * @method null|string getCampaignId()
 * @method self setCampaignId(string $campaignId)
 * @method null|float getDefaultBid()
 */
final class CreateAdGroupRequest extends AModel
{
	/**
	 * The name of the ad group.
	 * @var string
	 */
	protected string $name;

	/**
	 * Unique identifier for the campaign.
	 * @var string
	 */
	protected string $campaignId;

	/**
	 * The default bid price. The price should always have two decimals precision.
	 * @var float
	 */
	protected ?float $defaultBid = null;


	public function setDefaultBid(float $defaultBid): self
	{
		$this->_checkFloatBounds($defaultBid, 0, );
		$this->defaultBid = $defaultBid;
		return $this;
	}
}
