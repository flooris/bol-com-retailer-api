<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|array getAdGroupPerformance()
 */
final class AdGroupPerformanceResponse extends AModel
{
	/** @var AdGroupPerformance[] */
	protected array $adGroupPerformance = [];


	public function setAdGroupPerformance(array $adGroupPerformance): self
	{
		$this->_checkIfPureArray($adGroupPerformance, \HarmSmits\BolComClient\Models\AdGroupPerformance::class);
		$this->adGroupPerformance = $adGroupPerformance;
		return $this;
	}
}
