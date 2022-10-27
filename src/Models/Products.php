<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|array getProducts()
 */
final class Products extends AModel
{
	/** @var Product[] */
	protected array $products = [];


	public function setProducts(array $products): self
	{
		$this->_checkIfPureArray($products, Product::class);
		$this->products = $products;
		return $this;
	}
}
