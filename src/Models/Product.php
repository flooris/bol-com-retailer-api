<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|string getEan()
 * @method self setEan(string $ean)
 * @method null|array getRelevanceScores()
 * @method null|float getMaximumPrice()
 * @method self setMaximumPrice(float $maximumPrice)
 */
final class Product extends AModel
{
	/**
	 * The EAN number associated with this product.
	 * @var string
	 */
	protected string $ean;

	/** @var RelevanceScore[] */
	protected array $relevanceScores = [];

	/**
	 * The maximum price a product can have in order to be part of the promotion.
	 * @var float
	 */
	protected ?float $maximumPrice = null;


	public function setRelevanceScores(array $relevanceScores): self
	{
		$this->_checkIfPureArray($relevanceScores, RelevanceScore::class);
		$this->relevanceScores = $relevanceScores;
		return $this;
	}
}
