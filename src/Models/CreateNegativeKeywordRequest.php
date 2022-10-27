<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

/**
 * @method null|string getAdGroupId()
 * @method self setAdGroupId(string $adGroupId)
 * @method null|string getKeywordText()
 * @method self setKeywordText(string $keywordText)
 * @method null|string getMatchType()
 */
final class CreateNegativeKeywordRequest extends AModel
{
	public const MATCH_TYPE_EXACT = 'EXACT';
	public const MATCH_TYPE_PHRASE = 'PHRASE';

	/**
	 * The identifier of the parent ad group.
	 * @var string
	 */
	protected string $adGroupId;

	/**
	 * The text or phrase used in the negative keyword that caused the ad not to be displayed to the user.
	 * @var string
	 */
	protected string $keywordText;

	/**
	 * The match type that relates the negative keyword and the search term.
	 * @var string
	 */
	protected string $matchType;


	public function setMatchType(string $matchType): self
	{
		$this->_checkEnumBounds($matchType, [
			"EXACT",
			"PHRASE"
		]);
		$this->matchType = $matchType;
		return $this;
	}
}
