<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|array getSearchTermPerformance()
 */
final class SearchTermPerformanceResponse extends AModel
{
	/** @var SearchTermPerformance[] */
	protected array $searchTermPerformance = [];

	public function setSearchTermPerformance(array $searchTermPerformance): self
	{
		$this->_checkIfPureArray($searchTermPerformance, SearchTermPerformance::class);
		$this->searchTermPerformance = $searchTermPerformance;
		return $this;
	}
}
