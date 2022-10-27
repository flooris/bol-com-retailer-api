<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|array getKeywordPerformance()
 */
final class KeywordPerformanceResponse extends AModel
{
	/** @var KeywordPerformance[] */
	protected array $keywordPerformance = [];


	public function setKeywordPerformance(array $keywordPerformance): self
	{
		$this->_checkIfPureArray($keywordPerformance, KeywordPerformance::class);
		$this->keywordPerformance = $keywordPerformance;
		return $this;
	}
}
