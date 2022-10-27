<?php

namespace HarmSmits\BolComClient\Models;

/**
 * @method null|array getKeywords()
 */
final class KeywordsResponse extends AModel
{
	/** @var Keyword[] */
	protected array $keywords = [];


	public function setKeywords(array $keywords): self
	{
		$this->_checkIfPureArray($keywords, Keyword::class);
		$this->keywords = $keywords;
		return $this;
	}
}
