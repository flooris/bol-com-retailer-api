<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|array getProductPerformance()
 */
final class ProductPerformanceResponse extends AModel
{
	/** @var ProductPerformance[] */
	protected array $productPerformance = [];


	public function setProductPerformance(array $productPerformance): self
	{
		$this->_checkIfPureArray($productPerformance, ProductPerformance::class);
		$this->productPerformance = $productPerformance;
		return $this;
	}
}
