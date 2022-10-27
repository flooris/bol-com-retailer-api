<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|string getName()
 * @method self setName(string $name)
 * @method null|string getState()
 * @method null|float getDefaultBid()
 */
final class UpdateAdGroupRequest extends AModel
{
	public const STATE_ENABLED = 'ENABLED';
	public const STATE_PAUSED = 'PAUSED';
	public const STATE_ARCHIVED = 'ARCHIVED';

	/**
	 * The name of the ad group.
	 * @var string
	 */
	protected ?string $name = null;

	/**
	 * The state of the ad group.
	 * @var string
	 */
	protected ?string $state = null;

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
		]);
		$this->state = $state;
		return $this;
	}


	public function setDefaultBid(float $defaultBid): self
	{
		$this->_checkFloatBounds($defaultBid, 0, );
		$this->defaultBid = $defaultBid;
		return $this;
	}
}
