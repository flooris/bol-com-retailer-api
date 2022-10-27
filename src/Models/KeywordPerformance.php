<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|string getCampaignId()
 * @method self setCampaignId(string $campaignId)
 * @method null|string getAdGroupId()
 * @method self setAdGroupId(string $adGroupId)
 * @method null|string getKeywordId()
 * @method self setKeywordId(string $keywordId)
 * @method null|string getKeywordText()
 * @method self setKeywordText(string $keywordText)
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
 * @method null|float getSpent()
 * @method self setSpent(float $spent)
 * @method null|float getCpc()
 * @method self setCpc(float $cpc)
 * @method null|float getAcos()
 * @method self setAcos(float $acos)
 * @method null|float getRoas()
 * @method self setRoas(float $roas)
 * @method null|float getAverageWinningBid()
 * @method self setAverageWinningBid(float $averageWinningBid)
 */
final class KeywordPerformance extends AModel
{
	/**
	 * The identifier of the parent-campaign for this ad group.
	 * @var string
	 */
	protected ?string $campaignId = null;

	/**
	 * The identifier of the ad group.
	 * @var string
	 */
	protected string $adGroupId;

	/**
	 * The identifier of the adgroup.
	 * @var string
	 */
	protected string $keywordId;

	/**
	 * The text or phrase used in the keyword that caused the ad to be displayed to the user.
	 * @var string
	 */
	protected ?string $keywordText = null;

	/**
	 * The number of impressions from this keyword for ads in the ad group.
	 * @var int
	 */
	protected ?int $impressions = null;

	/**
	 * The number of clicks from this keyword on ads in the ad group.
	 * @var int
	 */
	protected ?int $clicks = null;

	/**
	 * The Click-Through Rate is a ratio of clicks versus impressions from this keyword, with four decimals of precision.
	 * @var float
	 */
	protected ?float $ctr = null;

	/**
	 * The number of product sales that resulted from visitors viewing ads with this keyword, up to 14 days after they viewed
	 * the ad.
	 * @var int
	 */
	protected ?int $conversions = null;

	/**
	 * The conversion rate is a ratio of the number of visitors who bought the product up to 14 days after viewing the ad with
	 * this keyword, versus those who only viewed the ad, with four decimals of precision.
	 * @var float
	 */
	protected ?float $conversionRate = null;

	/**
	 * The value of sales in EUR that happened up to 14 days after the visitor viewed an ad with this keyword, with two
	 * decimals of precision.
	 * @var float
	 */
	protected ?float $sales = null;

	/**
	 * The amount spent on ads with this keyword in EUR, with two decimals of precision.
	 * @var float
	 */
	protected ?float $spent = null;

	/**
	 * The average Cost Per Click of ads with this keyword in EUR, with two decimals of precision.
	 * @var float
	 */
	protected ?float $cpc = null;

	/**
	 * The Advertising Cost Of Sale for the ads with this keyword is a ratio of the ad spend versus sales revenue, with four
	 * decimals of precision.
	 * @var float
	 */
	protected ?float $acos = null;

	/**
	 * The Return on Advertising Spent for ads with this keyword is a ratio of sales revenue versus ad spend, with four
	 * decimals of precision.
	 * @var float
	 */
	protected ?float $roas = null;

	/**
	 * The value of the average winning bid for ads that used this keyword in the ad group in EUR, with two decimals of
	 * precision.
	 * @var float
	 */
	protected ?float $averageWinningBid = null;
}
