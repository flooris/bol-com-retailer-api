<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|array getCampaigns()
 */
final class CampaignsResponse extends AModel
{
	/** @var SingleCampaignResponse[] */
	protected array $campaigns = [];


	public function setCampaigns(array $campaigns): self
	{
		$this->_checkIfPureArray($campaigns, SingleCampaignResponse::class);
		$this->campaigns = $campaigns;
		return $this;
	}
}
