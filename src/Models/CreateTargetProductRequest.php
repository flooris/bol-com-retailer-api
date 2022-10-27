<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|string getAdGroupId()
 * @method self setAdGroupId(string $adGroupId)
 * @method null|string getEan()
 * @method self setEan(string $ean)
 * @method null|float getBid()
 */
final class CreateTargetProductRequest extends AModel
{
	/**
	 * The identifier of the parent ad group.
	 * @var string
	 */
	protected string $adGroupId;

	/**
	 * The EAN associated with the target product.
	 * @var string
	 */
	protected string $ean;

	/**
	 * The bid price. The price should always have two decimals of precision.
	 * @var float
	 */
	protected ?float $bid = null;


	public function setBid(float $bid): self
	{
		$this->_checkFloatBounds($bid, 0, );
		$this->bid = $bid;
		return $this;
	}
}
