<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|float getBid()
 */
final class UpdateKeywordRequest extends AModel
{
	/**
	 * The bid price. The price should always have two decimals of precision.
	 * @var float
	 */
	protected float $bid;


	public function setBid(float $bid): self
	{
		$this->_checkFloatBounds($bid, 0, );
		$this->bid = $bid;
		return $this;
	}
}
