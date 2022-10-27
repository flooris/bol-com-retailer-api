<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|string getState()
 * @method null|float getBid()
 */
final class UpdateTargetProductRequest extends AModel
{
	public const STATE_ENABLED = 'ENABLED';
	public const STATE_PAUSED = 'PAUSED';
	public const STATE_ARCHIVED = 'ARCHIVED';

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
		]);
		$this->state = $state;
		return $this;
	}


	public function setBid(float $bid): self
	{
		$this->_checkFloatBounds($bid, 0, );
		$this->bid = $bid;
		return $this;
	}
}
