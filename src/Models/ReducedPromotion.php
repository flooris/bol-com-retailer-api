<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|string getPromotionId()
 * @method self setPromotionId(string $promotionId)
 * @method null|string getTitle()
 * @method self setTitle(string $title)
 * @method null|DateTime getStartDateTime()
 * @method null|DateTime getEndDateTime()
 * @method null|array getCountries()
 * @method null|string getPromotionType()
 * @method null|bool getRetailerSpecificPromotion()
 * @method self setRetailerSpecificPromotion(bool $retailerSpecificPromotion)
 * @method null|Campaign getCampaign()
 * @method self setCampaign(Campaign $campaign)
 */
final class ReducedPromotion extends AModel
{
	public const PROMOTION_TYPE_AWARENESS = 'AWARENESS';
	public const PROMOTION_TYPE_PRICE_OFF = 'PRICE_OFF';

	/**
	 * The identifier of the promotion.
	 * @var string
	 */
	protected string $promotionId;

	/**
	 * The title of the promotion.
	 * @var string
	 */
	protected string $title;

	/**
	 * The starting date and time of the promotion.
	 * @var DateTime
	 */
	protected DateTime $startDateTime;

	/**
	 * The ending date and time of the promotion.
	 * @var DateTime
	 */
	protected DateTime $endDateTime;

	/** @var PromotionCountryCode[] */
	protected array $countries = [];

	/**
	 * The type of the promotion.
	 * @var string
	 */
	protected string $promotionType;

	/**
	 * Indicates whether the promotion is retailer specific or open to the platform.
	 * @var bool
	 */
	protected ?bool $retailerSpecificPromotion = null;
	protected ?Campaign $campaign = null;


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


	public function setCountries(array $countries): self
	{
		$this->_checkIfPureArray($countries, PromotionCountryCode::class);
		$this->countries = $countries;
		return $this;
	}


	public function setPromotionType(string $promotionType): self
	{
		$this->_checkEnumBounds($promotionType, [
			"AWARENESS",
			"PRICE_OFF"
		]);
		$this->promotionType = $promotionType;
		return $this;
	}
}
