<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|array getProducts()
 */
final class Assortments extends AModel
{
	/** @var Assortment[] */
	protected array $products = [];


	public function setProducts(array $products): self
	{
		$this->_checkIfPureArray($products, \HarmSmits\BolComClient\Models\Assortment::class);
		$this->products = $products;
		return $this;
	}
}
