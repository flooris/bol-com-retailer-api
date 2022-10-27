<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|array getAdvertiserPerformance()
 */
final class AdvertiserPerformanceResponse extends AModel
{
	/** @var AdvertiserPerformance[] */
	protected array $advertiserPerformance = [];


	public function setAdvertiserPerformance(array $advertiserPerformance): self
	{
		$this->_checkIfPureArray($advertiserPerformance, \HarmSmits\BolComClient\Models\AdvertiserPerformance::class);
		$this->advertiserPerformance = $advertiserPerformance;
		return $this;
	}
}
