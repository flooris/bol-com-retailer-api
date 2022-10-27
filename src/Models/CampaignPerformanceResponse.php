<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|array getCampaignPerformance()
 */
final class CampaignPerformanceResponse extends AModel
{
	/** @var CampaignPerformance[] */
	protected array $campaignPerformance = [];


	public function setCampaignPerformance(array $campaignPerformance): self
	{
		$this->_checkIfPureArray($campaignPerformance, CampaignPerformance::class);
		$this->campaignPerformance = $campaignPerformance;
		return $this;
	}
}
