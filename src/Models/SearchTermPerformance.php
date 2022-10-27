<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|string getCampaignId()
 * @method self setCampaignId(string $campaignId)
 * @method null|string getAdGroupId()
 * @method self setAdGroupId(string $adGroupId)
 * @method null|string getKeywordText()
 * @method self setKeywordText(string $keywordText)
 * @method null|string getSearchTerm()
 * @method self setSearchTerm(string $searchTerm)
 * @method null|int getImpressions()
 * @method self setImpressions(int $impressions)
 * @method null|float getSales()
 * @method self setSales(float $sales)
 * @method null|int getClicks()
 * @method self setClicks(int $clicks)
 * @method null|float getCtr()
 * @method self setCtr(float $ctr)
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
 * @method null|float getAverageWinningBid()
 * @method self setAverageWinningBid(float $averageWinningBid)
 * @method null|int getSearchVolume()
 * @method self setSearchVolume(int $searchVolume)
 * @method null|string getKeywordMatchType()
 */
final class SearchTermPerformance extends AModel
{
	public const KEYWORD_MATCH_TYPE_EXACT = 'EXACT';
	public const KEYWORD_MATCH_TYPE_PHRASE = 'PHRASE';

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
	 * The text or phrase used in the keyword that caused the ad to be displayed to the user.
	 * @var string
	 */
	protected ?string $keywordText = null;

	/**
	 * The search term that is matched to the keyword that caused the ad to be displayed to the user.
	 * @var string
	 */
	protected ?string $searchTerm = null;

	/**
	 * The number of impressions from this search term for ads in the ad group.
	 * @var int
	 */
	protected ?int $impressions = null;

	/**
	 * The value of sales in EUR that happened up to 14 days after the visitor viewed an ad with this search term, with two
	 * decimals of precision.
	 * @var float
	 */
	protected ?float $sales = null;

	/**
	 * The number of clicks from this search term on ads in the ad group.
	 * @var int
	 */
	protected ?int $clicks = null;

	/**
	 * The Click-Through Rate is a ratio of clicks versus impressions from this search term, with four decimals of precision.
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
	 * The conversion rate is a ratio of the number of visitors who bought the product up to 14 days after viewing the ad,
	 * versus those who only viewed the ad, with four decimals of precision.
	 * @var float
	 */
	protected ?float $conversionRate = null;

	/**
	 * The amount spent on ads that used this search term in EUR, with two decimals of precision.
	 * @var float
	 */
	protected ?float $spent = null;

	/**
	 * The average Cost Per Clicks of ads that were viewed with this search term in EUR, with two decimals of precision.
	 * @var float
	 */
	protected ?float $cpc = null;

	/**
	 * The Advertising Cost Of Sale for the ads with this search term is a ratio of the ad spend versus sales revenue, with
	 * four decimals of precision.
	 * @var float
	 */
	protected ?float $acos = null;

	/**
	 * The Return on Advertising Spent for ads with this search term is a ratio of sales revenue versus ad spend, with four
	 * decimals of precision.
	 * @var float
	 */
	protected ?float $roas = null;

	/**
	 * The value of the average winning bid for ads with this search term in an ad group in EUR, with two decimals of
	 * precision.
	 * @var float
	 */
	protected ?float $averageWinningBid = null;

	/**
	 * The number of searches on this search term.
	 * @var int
	 */
	protected ?int $searchVolume = null;

	/**
	 * The match type that relates the keyword and the search term.
	 * @var string
	 */
	protected ?string $keywordMatchType = null;

	public function setKeywordMatchType(string $keywordMatchType): self
	{
		$this->_checkEnumBounds($keywordMatchType, [
			"EXACT",
			"PHRASE"
		]);
		$this->keywordMatchType = $keywordMatchType;
		return $this;
	}
}
