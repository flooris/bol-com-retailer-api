<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|string getDate()
 * @method self setDate(string $date)
 * @method null|int getImpressions()
 * @method self setImpressions(int $impressions)
 * @method null|int getClicks()
 * @method self setClicks(int $clicks)
 * @method null|float getCtr()
 * @method self setCtr(float $ctr)
 * @method null|float getSales()
 * @method self setSales(float $sales)
 * @method null|int getConversions()
 * @method self setConversions(int $conversions)
 * @method null|float getConversionRate()
 * @method self setConversionRate(float $conversionRate)
 * @method null|float getSpent()
 * @method self setSpent(float $spent)
 * @method null|float getCpc()
 * @method self setCpc(float $cpc)
 * @method null|float getAcos()
 * @method self setAcos(float $acos)
 * @method null|float getRoas()
 * @method self setRoas(float $roas)
 */
final class AdvertiserPerformance extends AModel
{
	/**
	 * The date to which all campaign results are aggregated.
	 * @var string
	 */
	protected ?string $date = null;

	/**
	 * The total number of impressions for ads in all campaigns.
	 * @var int
	 */
	protected ?int $impressions = null;

	/**
	 * The total number of clicks on ads in all campaigns.
	 * @var int
	 */
	protected ?int $clicks = null;

	/**
	 * The Click-Through Rate is a ratio of clicks versus impressions, with four decimals of precision.
	 * @var float
	 */
	protected ?float $ctr = null;

	/**
	 * The value of sales in EUR that happened up to 14 days after the visitor viewed an ad, with two decimals of precision.
	 * @var float
	 */
	protected ?float $sales = null;

	/**
	 * The total number of product sales that resulted from visitors viewing ads, up to 14 days after they saw the ad.
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
	 * The total amount spent on all campaign ads in EUR, with two decimals of precision.
	 * @var float
	 */
	protected ?float $spent = null;

	/**
	 * The average Cost Per Click in EUR, with two decimals of precision.
	 * @var float
	 */
	protected ?float $cpc = null;

	/**
	 * The Advertising Cost of Sale is a ratio of the ad spend versus sales revenue for all ads, with four decimals of
	 * precision.
	 * @var float
	 */
	protected ?float $acos = null;

	/**
	 * The Return on Advertising Spent is a ratio of sales revenue versus ad spend, with four decimals of precision.
	 * @var float
	 */
	protected ?float $roas = null;
}
