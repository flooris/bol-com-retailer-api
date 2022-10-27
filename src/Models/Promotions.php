<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|array getPromotions()
 */
final class Promotions extends AModel
{
	/** @var ReducedPromotion[] */
	protected array $promotions = [];


	public function setPromotions(array $promotions): self
	{
		$this->_checkIfPureArray($promotions, ReducedPromotion::class);
		$this->promotions = $promotions;
		return $this;
	}
}
