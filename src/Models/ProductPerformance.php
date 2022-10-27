<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|string getCampaignId()
 * @method self setCampaignId(string $campaignId)
 * @method null|string getAdGroupId()
 * @method self setAdGroupId(string $adGroupId)
 * @method null|string getTargetProductId()
 * @method self setTargetProductId(string $targetProductId)
 * @method null|string getEan()
 * @method self setEan(string $ean)
 * @method null|int getImpressions()
 * @method self setImpressions(int $impressions)
 * @method null|int getClicks()
 * @method self setClicks(int $clicks)
 * @method null|float getCtr()
 * @method self setCtr(float $ctr)
 * @method null|int getConversions()
 * @method self setConversions(int $conversions)
 * @method null|float getConversionRate()
 * @method self setConversionRate(float $conversionRate)
 * @method null|float getSales()
 * @method self setSales(float $sales)
 * @method null|float getConversionsOtherEan()
 * @method self setConversionsOtherEan(float $conversionsOtherEan)
 * @method null|float getSalesOtherEan()
 * @method self setSalesOtherEan(float $salesOtherEan)
 * @method null|float getSpent()
 * @method self setSpent(float $spent)
 * @method null|float getCpc()
 * @method self setCpc(float $cpc)
 * @method null|float getAcos()
 * @method self setAcos(float $acos)
 * @method null|float getRoas()
 * @method self setRoas(float $roas)
 */
final class ProductPerformance extends AModel
{
	/**
	 * The identifier of the parent-campaign for the ad group.
	 * @var string
	 */
	protected string $campaignId;

	/**
	 * The identifier of the ad group.
	 * @var string
	 */
	protected string $adGroupId;

	/**
	 * The identifier of the target product.
	 * @var string
	 */
	protected string $targetProductId;

	/**
	 * The EAN number associated with this product.
	 * @var string
	 */
	protected string $ean;

	/**
	 * The number of impressions for the ads in the ad group.
	 * @var int
	 */
	protected ?int $impressions = null;

	/**
	 * The number of clicks on ads in the ad group.
	 * @var int
	 */
	protected ?int $clicks = null;

	/**
	 * The Click-Through Rate is a ratio of clicks versus impressions, with four decimals of precision.
	 * @var float
	 */
	protected ?float $ctr = null;

	/**
	 * The number of product sales that resulted from visitors viewing ads in this ad group, up to 14 days after they viewed
	 * the ad.
	 * @var int
	 */
	protected ?int $conversions = null;

	/**
	 * The conversion rate is a ratio of the number of visitors who bought the product up to 14 days after viewing the ad,
	 * versus those who only viewed the ad, with four decimals of precision.
	 * @var float
	 */
	protected ?float $conversionRate = null;

	/**
	 * The value of sales in EUR that happened up to 14 days after the visitor viewed an ad, with two decimals of precision.
	 * @var float
	 */
	protected ?float $sales = null;

	/**
	 * The number of conversions of similar products with a different EAN up to 14 days after a visitor viewed an ad.
	 * @var float
	 */
	protected ?float $conversionsOtherEan = null;

	/**
	 * The value of sales in EUR of similar products with a different EAN up to 14 days after a visitor viewed an ad, with two
	 * decimals of precision.
	 * @var float
	 */
	protected ?float $salesOtherEan = null;

	/**
	 * The amount spent on the product in the ad group in EUR, with two decimals of precision.
	 * @var float
	 */
	protected ?float $spent = null;

	/**
	 * The average Cost Per Click in EUR, with two decimals of precision.
	 * @var float
	 */
	protected ?float $cpc = null;

	/**
	 * The Advertising Cost Of Sale for the ad group is a ratio of the ad spend versus sales revenue, with four decimals of
	 * precision.
	 * @var float
	 */
	protected ?float $acos = null;

	/**
	 * The Return on Advertising Spent for the products in the ad group is a ratio of sales revenue versus ad spend, with four
	 * decimals of precision.
	 * @var float
	 */
	protected ?float $roas = null;
}
