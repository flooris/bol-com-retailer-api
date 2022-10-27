<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|array getAdGroups()
 */
final class AdGroupsResponse extends AModel
{
	/** @var AdGroup[] */
	protected array $adGroups = [];


	public function setAdGroups(array $adGroups): self
	{
		$this->_checkIfPureArray($adGroups, \HarmSmits\BolComClient\Models\AdGroup::class);
		$this->adGroups = $adGroups;
		return $this;
	}
}
