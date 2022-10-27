<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|array getNegativeKeywords()
 */
final class NegativeKeywordsResponse extends AModel
{
	/** @var NegativeKeyword[] */
	protected array $negativeKeywords = [];


	public function setNegativeKeywords(array $negativeKeywords): self
	{
		$this->_checkIfPureArray($negativeKeywords, NegativeKeyword::class);
		$this->negativeKeywords = $negativeKeywords;
		return $this;
	}
}
