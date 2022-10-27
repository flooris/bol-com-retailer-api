<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|array getTargetProducts()
 */
final class TargetProductsResponse extends AModel
{
	/** @var TargetProduct[] */
	protected array $targetProducts = [];


	public function setTargetProducts(array $targetProducts): self
	{
		$this->_checkIfPureArray($targetProducts, TargetProduct::class);
		$this->targetProducts = $targetProducts;
		return $this;
	}
}
