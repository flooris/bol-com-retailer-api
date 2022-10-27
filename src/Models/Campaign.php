<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|string getName()
 * @method self setName(string $name)
 * @method null|DateTime getStartDateTime()
 * @method null|DateTime getEndDateTime()
 */
final class Campaign extends AModel
{
	/**
	 * The name of the campaign under which the promotion had been created.
	 * @var string
	 */
	protected string $name;

	/**
	 * The starting date and time of the campaign.
	 * @var DateTime
	 */
	protected DateTime $startDateTime;

	/**
	 * The ending date and time of the campaign.
	 * @var DateTime
	 */
	protected ?DateTime $endDateTime = null;


	public function setStartDateTime($startDateTime): self
	{
		$startDateTime = $this->_parseDate($startDateTime);
		$this->startDateTime = $startDateTime;
		return $this;
	}


	public function setEndDateTime($endDateTime): self
	{
		$endDateTime = $this->_parseDate($endDateTime);
		$this->endDateTime = $endDateTime;
		return $this;
	}
}
