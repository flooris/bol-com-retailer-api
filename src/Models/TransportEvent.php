<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|string getEventCode()
 * @method null|DateTime getEventDateTime()
 */
final class TransportEvent extends AModel
{
	public const EVENT_CODE_PRE_ANNOUNCED = 'PRE_ANNOUNCED';
	public const EVENT_CODE_AT_TRANSPORTER = 'AT_TRANSPORTER';
	public const EVENT_CODE_IN_TRANSIT = 'IN_TRANSIT';
	public const EVENT_CODE_DELIVERED_AT_NEIGHBOURS = 'DELIVERED_AT_NEIGHBOURS';
	public const EVENT_CODE_DELIVERED_AT_CUSTOMER = 'DELIVERED_AT_CUSTOMER';
	public const EVENT_CODE_PICKED_UP_AT_PICK_UP_POINT = 'PICKED_UP_AT_PICK_UP_POINT';
	public const EVENT_CODE_AT_PICK_UP_POINT = 'AT_PICK_UP_POINT';
	public const EVENT_CODE_RETURNED_TO_SENDER = 'RETURNED_TO_SENDER';

	/**
	 * The transport event code indicates the location of the parcel within the distribution process.
	 * @var string
	 */
	protected ?string $eventCode = null;

	/**
	 * The date time of the transport event.
	 * @var DateTime
	 */
	protected ?DateTime $eventDateTime = null;


	public function setEventCode(string $eventCode): self
	{
		$this->_checkEnumBounds($eventCode, [
			"PRE_ANNOUNCED",
			"AT_TRANSPORTER",
			"IN_TRANSIT",
			"DELIVERED_AT_NEIGHBOURS",
			"DELIVERED_AT_CUSTOMER",
			"PICKED_UP_AT_PICK_UP_POINT",
			"AT_PICK_UP_POINT",
			"RETURNED_TO_SENDER",
		]);
		$this->eventCode = $eventCode;
		return $this;
	}


	public function setEventDateTime($eventDateTime): self
	{
		$eventDateTime = $this->_parseDate($eventDateTime);
		$this->eventDateTime = $eventDateTime;
		return $this;
	}
}
